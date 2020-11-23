
var google=$('#google-signin');

function google() {
    google.attr('data-clientid',googleClientID);
    google.attr('data-scope',"https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/contacts.readonly");
    google.attr('data-requestvisibleactions',"http://schemas.google.com/AddActivity");
    google.attr('data-callback',"social/google"+callBack);
    google.attr('data-theme',"dark");
    google.attr('data-cookiepolicy',"single_host_origin");
}