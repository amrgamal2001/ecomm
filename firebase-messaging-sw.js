// importScripts('https://www.gstatic.com/firebasejs/4.9.1/firebase.js');

importScripts("https://www.gstatic.com/firebasejs/7.6.1/firebase-app.js");
importScripts("https://www.gstatic.com/firebasejs/7.6.1/firebase-messaging.js");
importScripts("https://www.gstatic.com/firebasejs/7.6.1/firebase-analytics.js");
importScripts("https://www.gstatic.com/firebasejs/7.6.1/firebase-auth.js");
importScripts("https://www.gstatic.com/firebasejs/7.6.1/firebase-firestore.js");

// Initialize Firebase
firebase.initializeApp({
    apiKey: "AIzaSyAAdk8K0JT-ZS2hTPZVjGDnT4zTc2xNQgA",
    authDomain: "project-8-6-2020.firebaseapp.com",
    databaseURL: "https://project-8-6-2020.firebaseio.com",
    projectId: "project-8-6-2020",
    storageBucket: "project-8-6-2020.appspot.com",
    messagingSenderId: "937261375908",
    appId: "1:937261375908:web:2cee8d6c5a7c730a916131",
    measurementId: "G-YF2VD5X7F9",
});

const messaging = firebase.messaging();

messaging.setBackgroundMessageHandler(function (payload) {
    console.log(
        "[firebase-messaging-sw.js] Received background message ",
        payload
    );
    // Customize notification here
    const notificationTitle = payload.notification.title;
    const notificationOptions = {
        title: payload.notification.title,
        body: payload.notification.body,
        icon: payload.notification.icon,
    };

    return self.registration.showNotification(
        notificationTitle,
        notificationOptions
    );
});
