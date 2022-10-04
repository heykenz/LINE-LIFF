$(document).ready(function() {
    var myLiffId = "1655536423-R7MYoL7E";

    if(!myLiffId || myLiffId == '') {
        $('#liffLoginContent').addClass('hidden');
        $('#liffAppContent').addClass('hidden');
        $('#liffIdKosong').removeClass('hidden');
    } else {
        initializeLiff(myLiffId);
    }
});
function initializeLiff(myLiffId) {
    liff
        .init({
            liffId : myLiffId
        })
        .then(() => {
            initializeApp();
        })
        .catch((err) => {
            $('#errorCode').append(err);
            $('#liffAppContent').addClass('hidden');
            $('#liffIdErrorMessage').removeClass('hidden');
        });
}

function initializeApp() {
    if (!liff.isInClient()) {
        if (liff.isLoggedIn()) {
            $('#liffLoginButton').addClass('hidden');
            $('#liffLogoutButton').removeClass('hidden');
            $('#buttonNext').html('<a href="Javascript:void(0)"> Lihat Menu</a>').addClass('btn waves-effect default');
        } else {
            $('#liffLoginButton').removeClass('hidden');
            $('#liffLogoutButton').addClass('hidden');
        }
    } else {
        if (liff.isLoggedIn()) {
          $('#buttonNext').html('<a href="Javascript:void(0)"> Lihat Menu</a>').addClass('btn waves-effect default');
          $('#liffLoginButton').addClass('hidden');
      }
    }
}
$(document).ready(function() {
    $('#liffLoginButton').on('click', function() {
        if (!liff.isLoggedIn()) {
            liff.login();
        }
    });
    $('#liffLogoutButton').on('click', function() {
        if (liff.isLoggedIn() ) {
            liff.logout();
            window.location.reload();
        }
    });
    $('#openExternal').on('click', function() {
        liff.openWindow({
            url : 'https://magermakan.herokuapp.com/',
            external : true
        });
    });
    $('#buttonNext').on('click', function() {
        if (!liff.isLoggedIn() && !liff.isInClient()) {
            alert('Anda membuka aplikasi lewat browser. Silahkan login Terlebih dahulu');
        } else {
            $('#welcomePage').addClass('hidden');
            $('#orderPage').removeClass('hidden');
            $('body').css('overflow','auto');
            const idToken = liff.getDecodedIDToken();
            $('#userMess #userName').html(idToken['name']);
        }

    });
    $('#liffExitButton').on('click', function() {
        if (!liff.isInClient()) {
            alert('Anda membuka lewat browser');
            window.close();
        } else {
            liff.closeWindow();
        }
    });
    $('#pesanMenu').on('click', function() {
        if (!liff.isInClient()) {
            alert('Buka aplikasi lewat LINE');
        } else {
            liff
                .sendMessages([{
                    'type': 'text',
                    'text': "Terima Kasih atas pesanan nya. \n Berikut pesanan anda : \n\n" + getPesanan() + "\n\nPesanan anda sedang diproses. Mohon tunggu sebentar."
                }])
                .then(function() {
                    window.alert('Pesanan dikonfirmasi');
                })
                .catch(function(error) {
                    window.alert('Error sending message: ' + error);
                });
        }
    });
 });
function getPesanan() {
    var pesanan = [];

    $.each($('input[name="pesanan"]:checked'), function(index) {
        pesanan.push($(this).val());
    })

    return pesanan;
}
