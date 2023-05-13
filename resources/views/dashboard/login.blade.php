<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        {{-- <meta name="description" content="{{settings('description')}}"> --}}
        {{-- <meta name="keywords" content="{{settings('key_words')}}"> --}}
        <meta name="author" content="Abdelrahman">
        <meta name="robots" content="index/follow">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1,, shrink-to-fit=no, maximum-scale=1, user-scalable=no">
        <meta name="HandheldFriendly" content="true">
        {{-- <meta property="og:title" content="{{settings('site_name')}}" /> --}}
        {{-- <meta property="og:image" content="{{settings('site_logo')}}" /> --}}
        {{-- <meta property="og:description" content="{{settings('site_name')}}" /> --}}
        {{-- <meta property="og:site_name" content="{{settings('site_name')}}" /> --}}
        {{-- <link rel="shortcut icon" type="image/png" href="{{site_path()}}/images/favicon.jpg" /> --}}
        <title>{{settings('site_name')}} | {{awtTrans('تسجيل الدخول')}}</title>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{dashboard_path()}}/plugins/fontawesome-free/css/all.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- icheck bootstrap -->
        <link rel="stylesheet" href="{{dashboard_path()}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{dashboard_path()}}/dist/css/adminlte.min.css">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
        <style>
            svg {
            position: absolute;
            height: 100%;
            width: 100%;
            }

            .login-page .card {
            background: rgba(255, 255, 255, 0.2);
            }

            .login-page .card-body {
            background: unset;
            }

            .login-page [class*=icheck-]>input:first-child+label::before {
            border: 1px solid #ffffff;
            }

            .login-logo {
            margin: 0;
            padding-top: 20px;
            }

            .st0 {
            fill: url(#SVGID_1_);
            }

            .st1 {
            fill: #183B99;
            }

            .st2 {
            opacity: 0.41;
            }

            .st3 {
            fill: url(#SVGID_2_);
            }

            .st4 {
            fill: url(#SVGID_3_);
            }

            .st5 {
            opacity: 0.4;
            }

            .st6 {
            fill: url(#SVGID_4_);
            }

            .st7 {
            opacity: 6.000000e-02;
            }

            .st8 {
            fill: #FAFBFC;
            }

            .st9 {
            fill: #FFFFFF;
            }

            .st10 {
            opacity: 0.34;
            fill: url(#SVGID_5_);
            }

            .st11 {
            opacity: 0.46;
            }

            .st12 {
            fill: url(#SVGID_6_);
            }

            .st13 {
            fill: url(#SVGID_7_);
            }

            .st14 {
            fill: url(#SVGID_8_);
            }

            .st15 {
            opacity: 0.48;
            /* -webkit-animation: movingclouds 25s linear infinite;
            -moz-animation: movingclouds 25s linear infinite;
            -o-animation: movingclouds 25s linear infinite;
            animation: movingclouds 25s linear infinite; */
            }

            .test {
            -webkit-transform: translateX(150px);
            transform: translateX(150px);
            -webkit-animation: move 20s linear infinite;
            animation: move 20s linear infinite;
            }

            .st16 {
            opacity: 0.6;
            fill: url(#SVGID_9_);
            }

            .st16,
            .st18,
            .st24,
            .st25,
            .st23,
            .st17 {
            -webkit-transform: translateY(150px);
            transform: translateY(150px);
            -webkit-animation: moveup 10s linear infinite;
            animation: moveup 10s linear infinite;
            }

            .st17 {
            opacity: 0.6;
            fill: url(#SVGID_10_);
            }

            .st18 {
            opacity: 0.6;
            fill: url(#SVGID_11_);
            }

            .st19 {
            display: none;
            }

            .st20 {
            display: inline;
            }

            .st21 {
            fill: url(#SVGID_12_);
            }

            .st22 {
            opacity: 0.64;
            fill: url(#SVGID_13_);
            }

            .st23 {
            opacity: 0.6;
            fill: url(#SVGID_14_);
            }

            .st24 {
            opacity: 0.6;
            fill: url(#SVGID_15_);
            }

            .st25 {
            opacity: 0.6;
            fill: url(#SVGID_16_);
            }

            .st26 {
            display: inline;
            opacity: 0.74;
            fill: #FAFBFC;
            }

            .st27 {
            fill: url(#SVGID_17_);
            }

            .st28 {
            fill: url(#SVGID_18_);
            }

            .st29 {
            display: inline;
            opacity: 0.4;
            }

            .st30 {
            fill: url(#SVGID_19_);
            }

            .st31 {
            display: inline;
            opacity: 6.000000e-02;
            }

            .st32 {
            display: inline;
            opacity: 0.34;
            fill: url(#SVGID_20_);
            }

            .st33 {
            display: inline;
            opacity: 0.46;
            }

            .st34 {
            fill: url(#SVGID_21_);
            }

            .st35 {
            fill: url(#SVGID_22_);
            }

            .st36 {
            fill: url(#SVGID_23_);
            }

            .st37 {
            fill: #181E2F;
            }

            .st38 {
            font-family: 'Quicksand-Regular';
            }

            .st39 {
            font-size: 8px;
            }

            .st40 {
            font-size: 9.3606px;
            }

            .st41 {
            font-size: 8.6566px;
            }

            .st42 {
            font-size: 12.0897px;
            }

            .st43 {
            fill: url(#SVGID_24_);
            }

            .st44 {
            fill: url(#SVGID_25_);
            }

            .st45 {
            fill: url(#SVGID_26_);
            }

            .st46 {
            fill: url(#SVGID_27_);
            }

            .st47 {
            fill: url(#SVGID_28_);
            }

            .st48 {
            fill: url(#SVGID_29_);
            }

            .st49 {
            fill: url(#SVGID_30_);
            }

            .st50 {
            font-family: 'Quicksand-Bold';
            }

            .st51 {
            font-size: 25.2585px;
            }

            @keyframes move {
            0% {
                -webkit-transform: translateX(-100%);
                transform: translateX(-100%);
            }

            100% {
                -webkit-transform: translateX(100%);
                transform: translateX(100%);
            }
            }

            @keyframes moveup {
            0% {
                -webkit-transform: translateY(-100%);
                transform: translateY(-100%);
            }

            100% {
                -webkit-transform: translateY(100%);
                transform: translateY(100%);
            }
            }

        </style>
    </head>

    <body class="hold-transition login-page">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            preserveAspectRatio="none" viewBox="0 0 750 500" style="enable-background:new 0 0 750 500;" xml:space="preserve">

            <g id="BACKGROUND">
                <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="378.7787" y1="14.7752" x2="370.1495"
                    y2="551.9437">
                    <stop offset="0" style="stop-color:#1F72AA" />
                    <stop offset="2.110190e-02" style="stop-color:#2577AF" />
                    <stop offset="0.1415" style="stop-color:#418EC7" />
                    <stop offset="0.2618" style="stop-color:#569FD9" />
                    <stop offset="0.3811" style="stop-color:#62A9E3" />
                    <stop offset="0.4979" style="stop-color:#66ACE7" />
                    <stop offset="1" style="stop-color:#345184" />
                </linearGradient>
                <rect class="st0" width="750" height="500" />
            </g>
            <g id="OBJECTS">
                <g>
                    <g>
                    <path class="st1" d="M-31.6,447.4c-0.1,0.2-0.1,0.5-0.1,0.8c0,0.3,0.1,0.6,0.2,0.9c0.2,0.6,0.3,1.2,0.5,1.8
                            c0.2,0.6,0.3,1.2,0.5,1.8c0.2,0.6,0.3,1.2,0.5,1.8c0.2,0.6,0.3,1.2,0.5,1.8c0,0.1,0,0.2,0.1,0.2c0,0.1,0.1,0,0.1,0
                            c-0.2-0.6-0.3-1.2-0.5-1.8c-0.2-0.6-0.3-1.2-0.5-1.8c-0.2-0.6-0.3-1.2-0.5-1.8c-0.2-0.6-0.3-1.2-0.5-1.8
                            c-0.1-0.3-0.2-0.6-0.2-0.9c-0.1-0.3-0.1-0.5-0.1-0.8C-31.5,447.6-31.5,447.6-31.6,447.4C-31.5,447.4-31.5,447.4-31.6,447.4
                            L-31.6,447.4z" />
                    </g>
                </g>
                <g class="st2">
                    <g>
                    <linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="371.3337" y1="605.5969" x2="381.3027"
                        y2="137.0543">
                        <stop offset="0" style="stop-color:#1F72AA" />
                        <stop offset="2.110190e-02" style="stop-color:#2577AF" />
                        <stop offset="0.1415" style="stop-color:#418EC7" />
                        <stop offset="0.2618" style="stop-color:#569FD9" />
                        <stop offset="0.3811" style="stop-color:#62A9E3" />
                        <stop offset="0.4979" style="stop-color:#66ACE7" />
                        <stop offset="1" style="stop-color:#345184" />
                    </linearGradient>
                    <path class="st3" d="M715.2,291.4c-10-2.3-21.9-2.9-31.1-5.8c-20.8-6.4-21-21.6-44-26.5c-21-4.4-44.7,3.1-59.3,11
                            c-14.6,7.9-29.7,17.4-52.8,18.5c-9.8,0.5-19.7-0.7-29.4,0c-12.3,1-22.1,4.9-31.1,8.7c-16.6,7-33.1,13.9-49.7,20.9
                            c-7.3,3.1-15.7,6.3-25.8,6.3c-23.1,0-32.2-16.1-55.3-16.5c-14.8-0.2-27.3,6.5-41.9,5.4c-10.2-0.8-17.3-5.2-27.4-6.2
                            c-14.9-1.5-27.5,4.6-36.9,9.9c-9.4,5.3-24.4,10.8-38.2,8c-6.4-1.3-10.6-4.2-17.3-5.3c-9.6-1.5-19.8,1.5-26.2,5
                            c-6.4,3.4-11.5,7.6-20.5,9.7c-7,1.6-15.2,1.8-23,2.3c-45.9,3.3-78,20.9-105.4,37.3v118.3c0,3.9,7.9,7,17.6,7h714.7
                            c9.7,0,17.6-3.2,17.6-7v-169C747,311,740.3,297.2,715.2,291.4z" />
                    </g>
                    <g>

                    <image style="overflow:visible;opacity:0.28;" width="1627" height="304" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAABl0AAAEyCAYAAABwERa7AAAACXBIWXMAABcRAAAXEQHKJvM/AAAA
                        GXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAH/hJREFUeNrs3etu2zqigFHK8Zz3
                        f97ZbXTgQYXNsLxKlCM7awGGb/JN6Q/LX0mGAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
                        AAAAAAAAAABcy+K9AgAAAAAAL2K98ptbvCcAAAAAAODFXSLGXCVwLC/+/gEAAAAAgLnWJz/usO+M
                        FsvF3x8AAAAAAHBd66Rtpnl21FhOvh8AAAAAAHg/MwLL6QHmWRFjGbxvmfx+xRoAAAAAAPh+Z0wZ
                        tk7YfoqzY0RvPFl2Pu4ZnwEAAAAAAHiekYjSs+3IYw85M1i0AslS2bb3vmd8DgAAAAAA4DlGI8p6
                        YNvSbbudESv2xJbe23qeHwAAAAAAeE2tMJK7vA5s2/Mau82OFbUg0hNYloHH7P0cAg0AAAAAADzP
                        enDbWmhpnbcev/d9Zs0KED2jW3rCykh86XldAAAAAADg+mbElqNBpnZbl/tJO6c3qKSXR0JMerl2
                        GwAAAAAAcF090aUVWrbTEsrhZLs/dGw7bDnhOUrhpBVb9kaY2mcRYAAAAAAA4Jp6Rpm0RrLUTqFx
                        OXdee29NR6PESHCphZbaKTQu1z6L6AIAAAAAANc0MqVY7fJnGAswp4WXmdOLtYJL7+kW9o2Aic9r
                        7w8AAAAAAHi+tfO+2oiW9Ho8RVgrwKSvtxTOdzsSXXKjTHqDy61y/RbaAaYnuiwd7xsAAAAAADjX
                        2nF7bfRJLrrEcWVJLqfh5bPy+rXwMhxh9kaX2lRePbElDSu3wv257VtTj9XeY+12AAAAAABgvtHo
                        0rNmy2d0fouub83gM+RDTe491Ea6DIWXGdOLpaGjNbIljSzpaalc7ln7Jfe+arcBAAAAAADnGl2/
                        pTe4pJfjbvAZPe8WZ3Lx5fAIl82e6FKaVqx3dMutcPoI9SDTmm5MeAEAAAAAgGvaG10+Qzm2pNd/
                        h7+7wWfyGvHImNx7OTTN2KyRLr1ruOQCy3Y9va106pluLGQu124DAAAAAADOsye6fIZybMmdHr//
                        p+ElFgeXpfI+nzbSpWfNlBDq04qlgeUjuS09F14AAAAAAOB1HR3lUgstv8Pfo1ziyyF8bQJbcMmN
                        dknfz/Bol6MjXXpHudQCS+nUCjC58BIqOzJ93wAAAAAAwPnWxu1r5nItuMSh5ePPedoLtvBSEo92
                        yb2/XaNd9kaXWszIxZZWYPn4815aESYOML2jXQQWAAAAAAC4jnSUS2tqsS2ypMFlO5Vawe/K625K
                        U40Nr+fyMBJdlsr13EiTngBzb5zHl9ORL+laMXujiygDAAAAAADzrJ33l6YVi6NLHFnS2PI4/Qr1
                        ARql189tm77vNLg0A8ys6cVC6JterBRccqeP5HI6JVkaXG6hP7oILQAAAAAAcL7aei49a7lscSUN
                        Lr/Cv6NcHpdrsWUtnOLHrOFrfHna9GK1iNEbXOLw8jj9p3A5jS656caW5HJtTRdrvAAAAAAAwHnW
                        ztt7gktuZMt2enSC0iiX9HVqp9xol+ERLpve6JKLF6UF7PcEl/+Er8ElPc+t+XLLnHqnGBNZAAAA
                        AADgfLXYsp2n0SU+5aYT20a4tIJL7vlr4aUnuFQDzH3STltCfXqxXHBJpxb7v/A1wrTCS7zGS23n
                        pmvP5N47AAAAAAAwx9q4rbWWS2kNl0dweXSCf0I7utQiy2coN4018zzdRqNLKVr0rueSrumSTin2
                        f+FrdBkJL0sw2gUAAAAAAK5idJRLvI5LKbhsU4qVgkst5MStohVeUl1TjPVEl2XwvtwaK7UpxuKw
                        sp1K8SW3xkttirEjwUWUAQAAAACAsnXHNmlweUjXcSlNK/Y4PbpAz+iW9Lly3WJN3semFViK9++Z
                        Xqy1lktupEsuvKQjXdLgkp7fQzu8tEa7pJdrnxEAAAAAAKgbDS+9U4ulwSXuAaU1XErB5ePPedwq
                        eqYY297r0vk5D6/pkhtBUptiLJ4SLI0vaXjZTqURL6XRLrn3kL5X4QUAAAAAAI6bFV16Rrlsa7mU
                        RrmkoWU7xeGl1BHShhCv7dK9rstIdFkqt/eOcqkFl97wEkeXe/gac9LRLiEcn2YMAAAAAAAYt2dq
                        sXg9l1/h32DSWsMlF23S8JI2i8/k/dXWdAmhY8TLkZEutYBRGukSh5d0urA4vMRTi/WMdtmec0l2
                        WgjHRrsAAAAAAAD79Y5yeZzHweVxenSAR3jJzXQVQt/UZD1rw+emKuueUiw2Y3qx2voupeCSO6Uj
                        XXKjXuIwsz1mdF0X4QUAAAAAAM5XCi7beRxcStEkF0tC5THx+i/xoI1aeNmk67oMa0WXkSiRixu9
                        ASaeLqy0xktutMtHZufloovgAgAAAAAAz9WKLp+Z8zSglNZvWUN+7ZdtdEzPuvCb3EiXlmyYue94
                        ktIwm/S8J7jUwktpxEs62iW349LwknuPIQgvAAAAAABwhp5RLq2RLqU1XLZt/xPqweVWOC3hpCnG
                        jq7pUptaLHcqBZc4vNTWeqmt6yK6AAAAAADANRyNLrlRLrnt7uHr+i+1acV6Q0s8xdhS+ExZ9xN2
                        ZC24pOGltr5Lbqqxe+a8NkToFr2nEAQXAAAAAAB4lpHpxbZTaQqwONLEo2Fy04nlBmqUlibZM7VY
                        0ezoUitCuQ9UWuMlDTDbeRpc0tEupZEupdgivAAAAAAAwDlGo0s6pVj6XPHIltq6LaUWUYstU+JL
                        b3RZOu7PTTMWQn19l9aUY/fkPB0Fk1vXZenceb2fDQAAAAAAGLNWLuemF9uCS7p0SPizzdYHfkeX
                        t/CSTiWWaxGlZjAaW6rrvOwd6bIMbNda46UWXmrTkOWCTGsn5t676AIAAAAAAHOtheu56PI4bb/j
                        /04e8zjVlispBZdWnwihb8DJOvKhj0wvVpvrbAnjwSV3aoWXOMDkHl/agaX3DAAAAAAA7LdWbkvD
                        Sxxb0t/z421q67WU2sDe8BLfv45++DPWdBmJMKUdMRpe0u1Ka7qILgAAAAAAcI61cdsaXY+Dy+P3
                        /G16sXi7z5DvAz1tobT8SGzvFGNF95N2bGstlVaEWRo7Kw0yuetxeAmhvq4LAAAAAAAwVym4PM4f
                        v9F/Rufxdh/ha3D5Hdr9oGdESyvEHO4Gs6JLqwK1Plhp6rHc5VK9KtWtnpEuAgwAAAAAABxXW8tl
                        O99OueASj3ApRZZcP9izdsu0ES6b+5N3du4DjKz7UlsPpjZ8KPfaQgsAAAAAAMwV//a+hr+nDFvC
                        1/ASku0fp542UBrI0Qowp7qfvGN71njJ3VYb9XLruD2+HEI7uAgwAAAAAABwXBxS4sXo49iyXd5G
                        tGyPu4V/pxwrNYBcOwihvexJbZtpZkeXVmQJoTzSJfehSzuiVK1ujR1een0AAAAAAOC4OLS0rqeR
                        ZQsytdjSGsyR3hdCuwNMizDfMb1Y6NgBpZ01sjZMaaeesjgOAAAAAAAwrPd3/9DYJvd86euc7r5z
                        B5yxU2s7OAzs1NL2pfueusMBAAAAAOCNxeu4jGxbG7QRQn0N99xts6YRS0fqVN1O2qnLhMeVoklr
                        dEy6M1sx5mkL6AAAAAAAwJurratSWv6jZ6arkHmOy/3Gf3/SDu65f2QtmKXyR1waf7jaawEAAAAA
                        APul67dsty0hPwqmFlVK2/V0gNZzlJ7nkBnRZe8OGHnO0TVaQuf2QgsAAAAAAMwT/+6+RrfF4aX1
                        2Nb68DPe49Lx/ofdv2Fnt4YULQMfrDfGLIPPLcYAAAAAAECfUkhpjXQprekSQn8j6J3G7Cm/+98v
                        9oepTfvVO7wo7Nx5QgsAAAAAAIzLjW7pfVxuyrHStq21Yb7d7UX+UEvHTh19rtwfCgAAAAAA2G/v
                        eiu151omPNdT3L55x9eu7/3jjTyn2AIAAAAAAPMtBx+7HHy9b/n9//biO772fJeuXQAAAAAA8EOV
                        ZrVaJj33t7m94R+otpOXq+x4AAAAAAB4cyPTgr3FQIqbvzkAAAAAAMBxogsAAAAAAMAEV40uy4s/
                        PwAAAAAAcO7v8Uu42O/9twv/AYQRAAAAAADgZZheDAAAAAAAeEdPHwkjugAAAAAAAEwgugAAAAAA
                        AEwgugAAAAAAAEwgugAAAAAAAEwgugAAAAAAAEwgugAAAAAAAEwgugAAAAAAAK9sSc6/jegCAAAA
                        AAC8k2+LL6ILAAAAAADAhFgjugAAAAAAAO/saSNfRBcAAAAAAODqljC2dstSePypAUZ0AQAAAAAA
                        vtMycH8pvCyFxz11fRfRBQAAAAAAuKI90WTZse20OCO6AAAAAAAAr2rZ+ZjlwOOLRBcAAAAAAOBK
                        ekeeLI3zpxNdAAAAAACAV7IMbvO0CCO6AAAAAAAA32F0/ZVaSMmNckmnERsZQbNrnRfRBQAAAAAA
                        uLKe2NK67ez39T+iCwAAAAAAcAXLzu1Lo1xqj9s1kqVFdAEAAAAAAL5bLpwcffysuNL9eNEFAAAA
                        AAC4otI6LqWQUgs3pQAzus5LlegCAAAAAABcXSmotALMyPMfnm5MdAEAAAAAAK5s6bh91vRih8KL
                        6AIAAAAAAFzNcuAxtenFTiW6AAAAAAAA32lpXE9vX0L/+i652/eMgOl5btEFAAAAAAC4pDSuxOel
                        y6PTi00dASO6AAAAAAAA78D0YgAAAAAAwI+17NjmyPRitdc4/DyiCwAAAAAAcAXL4P0904vlbju6
                        pkuR6AIAAAAAAHy32tRgPfeXtll2vpddUUZ0AQAAAAAArqYnsoTKNrUpyU4jugAAAAAAAM/QWocl
                        t13p/qWw7TLwPLn3cijMiC4AAAAAAMB3WAa3W3Y8fnnmBxJdAAAAAACAqxtZ06X1PLvXbGkRXQAA
                        AAAAgHeydN42negCAAAAAAB8p2XH9q31Yb4lvIguAAAAAADAK1oyl5fC/U8hugAAAAAAAO+qd+2W
                        KWu8iC4AAAAAAMA7yI12eSrRBQAAAAAAuKp0/Zbveg9dRBcAAAAAAODqSuFlyrRgs4guAAAAAADA
                        mZadj1kOvFYpzqTPOzXaiC4AAAAAAMAryYWSZcJzHCa6AAAAAAAA/Gt3jBFdAAAAAACAq1he+c2L
                        LgAAAAAAwBWU1mNpbX8ZogsAAAAAAMAEogsAAAAAAPAOvn3ki+gCAAAAAAAwgegCAAAAAAC8k9G1
                        YaYRXQAAAAAAACYQXQAAAAAAACYQXQAAAAAAACYQXQAAAAAAACYQXQAAAAAAgFe1/DldgugCAAAA
                        AAAwgegCAAAAAAAwgegCAAAAAAAwgegCAAAAAAAwgegCAAAAAAAwgegCAAAAAAAwgegCAAAAAAAw
                        gegCAAAAAAAwgegCAAAAAAAwgegCAAAAAAAwgegCAAAAAAAwgegCAAAAAAAwgegCAAAAAAAwgegC
                        AAAAAAAwgegCAAAAAAAwgegCAAAAAAAwgegCAAAAAAAwgegCAAAAAAAwgegCAAAAAAAwgegCAAAA
                        AAAwgegCAAAAAAAwgegCAAAAAAAwgegCAAAAAAAwgegCAAAAAAAwgegCAAAAAAAwgegCAAAAAAAw
                        gegCAAAAAAAwgegCAAAAAAAwgegCAAAAAAAwgegCAAAAAAAwgegCAAAAAAAwgegCAAAAAAAwgegC
                        AAAAAAAwgegCAAAAAAAwgegCAAAAAAAwgegCAAAAAAAwgegCAAAAAAAwgegCAAAAAAAwgegCAAAA
                        AAAwgegCAAAAAAAwgegCAAAAAAAwgegCAAAAAAAwgegCAAAAAAAwgegCAAAAAAAwgegCAAAAAAAw
                        gegCAAAAAAAwgegCAAAAAAAwgegCAAAAAAAwgegCAAAAAAAwgegCAAAAAAAwgegCAAAAAAAwgegC
                        AAAAAAAwgegCAAAAAAAwgegCAAAAAAAwgegCAAAAAAAwgegCAAAAAAAwgegCAAAAAAAwgegCAAAA
                        AAAwgegCAAAAAAAwgegCAAAAAAAwgegCAAAAAAAwgegCAAAAAAAwgegCAAAAAAAwgegCAAAAAAAw
                        gegCAAAAAAAwgegCAAAAAAAwgegCAAAAAAAwgegCAAAAAAAwgegCAAAAAAAwgegCAAAAAAAwgegC
                        AAAAAAAwgegCAAAAAAAwgegCAAAAAAAwgegCAAAAAAAwgegCAAAAAAAwgegCAAAAAAAwgegCAAAA
                        AAAwgegCAAAAAAAwgegCAAAAAAAwgegCAAAAAAAwgegCAAAAAAAwgegCAAAAAAAwgegCAAAAAAAw
                        gegCAAAAAAAwgegCAAAAAAAwgegCAAAAAAAwgegCAAAAAAAwgegCAAAAAAAwgegCAAAAAAAwgegC
                        AAAAAAAwgegCAAAAAAAwgegCAAAAAAAwgegCAAAAAAAwgegCAAAAAAAwgegCAAAAAAAwgegCAAAA
                        AAAwgegCAAAAAAAwgegCAAAAAAAwgegCAAAAAAAwgegCAAAAAAAwgegCAAAAAAAwgegCAAAAAAAw
                        gegCAAAAAAAwgegCAAAAAAAwgegCAAAAAAAwgegCAAAAAAAwgegCAAAAAAAwgegCAAAAAAAwgegC
                        AAAAAAAwgegCAAAAAAAwgegCAAAAAAAwwRWjy+rPAgAAAAAAdLpMV7hdeAeJLwAAAAAA8PrWF33u
                        YTd/YAAAAAAAgOOs6QIAAAAAAFzByw+YuPljAAAAAAAAJ1kzl9fMffE2L/t7/+0CO7q2c2f80Vq3
                        AQAAAAAAz3XG7/Uzu8Mutx/wRxNXAAAAAADg+X7c7/O3F/wDrZXr/uAAAAAAAPC9cr/dl0af1G5f
                        K893SbcL/iFKO7sntrTmgWv94QAAAAAAgHFrGP+9vXeNl57tL/E7//0Cf4TWjll3PNcSnY++lzD4
                        OAAAXuPLPwAAAN97PNYzcqUVblpd4dvWc3m4T95hrR3TW7lqI1lGdl4aUuIgs93moBwAAAAAAOZZ
                        O2+Lb987vdjIwI3e5Ut2N4L7k3buumOH9u6MtfBaS+Y50hEwRrcAADDlizUAAABdx1m53/d7pw3r
                        HYgx0humuj9pJ87Y+bWdsYZ29WqNdHGADQAAAAAAx/Wsu57+nl+6PXTcX3rN3vc6rQ/cd76B5cQ/
                        wBrasWVt/CFya7oY6QIAwJ4DAwAAAI4fX9V+48+d0m1DqM+AdeZxXfdz3r9xZ/eMYhmJL+n1ZWBH
                        LMEBNgCAAwIAAADOOL4qTRFWGlwRQn3gRen+0nM/7XjvfsKOXAd2dO4x687TZ/g3njx1JwIA8HYH
                        BM9+PAAAwE843qpFkc/o/DNzW21ETO9Il9PXermfvCNb04CtndunO/Uzc30JX8PL4/Iteo7cVGMO
                        kgEA2PNlHAAAgLFjqlwbqMWUXHgZiTCtNnHK4I37BXZ2T2jJ7dT4+hKdPv88xy25Lw4t6XRi1nMB
                        AHAAMGvbI48BAAB49+OvtAWkv/+3RrqkwSUXYL7t+Oz+hB0YMjuzNU1YrWblilYcXWLxben9QgsA
                        ACPfZb/tSzsAAMAbHF+1Zr5Ko8vv8HcLqHWC2uiXVpCZdnx3n7jj1sJtvUN4Sju4VroeO30J+ejy
                        2H6bXqwnuIgwAADv96X+7OcQXgAAAPqPm0qdoBZcfifXc6Nhcg2hd734qcd592/aua3Qktu5v0Nf
                        cNme6xb+nlIsPo8JLgAA7/ul/szHiy4AAAD9x0216PI4j3tAGlvS+0rxpTb65fTjuPvBHbWG+lxs
                        vaNZ0h3xu3L+OD2CSi24lKYdE14AAH7el/pZjxNiAAAAjh+npedpJNk6wK/wd3zJDc7oGf1SWlc+
                        d1sI9ZEwVfcDO2fp3Hm1acPWUB8ylBat7VQKLh9/HpOLMqXgIrYAAPycL/dHt10nvxYAAMBPOy4r
                        9YM0umzh5Vf4GmHSGFOafiwXXEpTi834D3j/c/+GHdeao+134/TYobn1W7bn3IJLaTRMCO31XQAA
                        eM8v93u32zPPr/gCAACQP07qWdMlji6t8FJaqmRkXZcpx3D3gR3RGtmyDuyw3uDy6897TGPLknn9
                        Lbhspzi8hJAf6SK4AAD8zC/4I/cLLgAAAPOOx1ojXbZTHFgep39CPsCkl0sdIh35Unpvh2Y4uJ+8
                        A1s7LVeu0uDyOE9HraSvkwYX0QUAgO4vxeFYbFl3vB4AAMBPPiZLB3GU1nVJR7v8E/4OMKXpxnIR
                        pjTl2DT3gzuoVIRKwSW+XJs+rDe4PJ7nIzrlgovoAgDASHAZvV57fuEFAAAgf4wU94U0uqRTjMWR
                        pRRecvElnW5sZI2XXUHmfmCHLIU3UDvVRrekseWxw+Jwcsu85kdoR5cQBBcAAIQXAACAKx2b5aYZ
                        S/tBPJXYP8mpNeVYKbj0rPWSvt/uCHPv+PDLwI7qnYst/dBpbEkDynaKn/P3n8fEweUjGOUCAED9
                        i33PfTMiTOs1AQAAfvKxWU90iUPKP4VTOtKltb7LGvKjXvYcw/21/X3CzqkNuynNxVYa6bIFlMeO
                        WsLf04rFz3n/87h4pEsaXIQXAABmxZa9o12EFwAAgPxx0ui6LnFs+W+oR5jW2i65US8hHFzr5eia
                        Lq0pxnLzsKWFKjdFWCu4bI/vnVpMcAEA8GW+574j0UVwAQAAGDtOy0WXbaardLasNLz8NznPjXj5
                        FcojXkrTjB06prsP7oQlc9vedVy24LKd56YTC8kOTx9/Tx6brgETQjm65K4DAPBeX+BHtukNLnun
                        GgMAAHCs9vf1WlMojXZ5nOdGuvwKf8eX1miX3rVduo757ifssNpO2kan5MJLT3R5POY/4esaMNta
                        Lukol9L0YunlEkEGAOA1vqQfedyM8CK6AAAA7Ds2S6f0qk0xVptmLA4wteDyO9SDy2H3gztlCf0j
                        XOKddIs+aGn9lnhHb7Fle8wWXNJRLrngIroAALznl/Ojj2vddkZwEWQAAIB3twwcE+XWUSl1hXQU
                        SzrKJR35kosvvVOM7V7fpSe65NZuWZLLPeFliy3b6VcoB5L4teKaFY9y2YLLR/h3hEs82iUEU4sB
                        APx0I8PB10mXW68NAABAfl2X0miX3vCSCy618JKuJbNm3lfovP4/9x07YWnc1hteWsGlNHwoN61Y
                        79RipdAiwAAAvM8X9tFtjkwpZqQLAADAVz2/t9emGGuNdknjSxxaWuu61IJLz7Fb85hu1poupVEu
                        W/hId0zvCJfcQjmP95wGl5GpxXr/6AAAvIdnTC1mXRcAAIBjx2tpX8gN6kjXdknjSxphesLL1LVd
                        7pN2xhLywWU7L4WWUnBZQ36BnHiUS+60dy0XEQYA4D2+pI9u+4xpxva8TwAAgFfW+s29dCyWG+2S
                        LkPyuJxOH1aKL+kUY/F0ZaX4knsv3XqjS21dlxDKw396wktup37+eW9xdPn4s2PSES7pei6tUS49
                        f3AAAN6HdV0AAABe49gtN9olji65ES+50S+5kS654NI70qV7doP7zg++ZJ54CeUpxtLw0tqhH+Hf
                        9Vvi6JKbVmwLLGl0CaG9lkvovB8AgGt/MZ/xmN7pws6MLiINAADwCs74TX2tnOIpxrbL6bRhpdEv
                        teAyMsql63jt6PRiudEvuZ2x/RG28FLbmY/tP8Lf4aUUXHrWchFVAAAIjS/LogsAAECfs6LLdl6K
                        LqU1XnKjXtL7c8+RCy6HjtPugx94KVzednK6U+Lg8hnao1zSHfYR/h7lkk4nVhrhspz8DwAAgNfV
                        M+XYntCyDr4eAADAO+v5bT53XFWaaixtCLn4koaWXHhJ14wpjXTpOQ784n5wh5WmGtve8C18jS+1
                        5+kJLr1ruLRGuIgwAAA/y8gC93tGudReQ3ABAAB+umXwmKw1zVgpvsSR5bNy3ruey/Dx3KzpxXJr
                        u4TQDi7xB7lFH/YWvoaXW2hPKxZCPrYsg39gAADez0gQEV0AAADmav0mnzvW6h3x0oown4XrtfAy
                        vJbLZjS6rJmdk1vbZbMFlM/Cc6XR5RY9ZgsvueDSii6lP6LYAgDwM62D960Hr+/6cg4AAPDGls7j
                        pjS6xJc/Q37US3y9tH5Laz2XPceKfzlrerFYKbyUoks6mqU2ukV0AQCg5zvr6P1HoorQAgAAULZ0
                        HlOV1llJo0vPCJhcpJk+yuVhT3RpjXbJvYk0vGyRJWR2UmlESy249EaX2u0AALyfdec2ogsAAMA5
                        RqJLep6baiyNLqVRMOljRmNL17HefcIOSoPLEtrhJd7+Fn2gJdouDiq9I1xEFwAARr8Uz44u3V/G
                        AQAAfpjeKcbi22qjXUrrvYyEljXzWruP65ZJO2epnOdOI1Gld3SL4AIAQBj4Aj+y3ej/chJdAAAA
                        8pbBY6698WXkVHu9oWO8ZeLOGQ0vewNLK7jUPpfoAgDwMz07ugx9KQcAAPghlsFjqFz4yMWSPYFl
                        enBpfcA9j+8JL+n1nvtCaK/dIrQAANDrjAiz9zUAAAB+itHokt6eRpP4ck9YKV3One86tltO2ElL
                        x/nScb12ufa6Z3xGAADeyzOiy5HtAQAAXt2e3+Z7pnHumXYsd3sYON99LLectPNaI1KWxm2tcFN6
                        7wILAAB7Gb0CAABw7WOz0qiX7XxPXJkWXB7Oii7pba21X3pGx/S+1rM+MwAAr/tFffbjxBgAAIDn
                        HuftCSpr47kOH+fNDhBH40trm57XAACAWV/iz3wMAAAA+4+9Ri6fHls2Z8SKnrVVRsJKz9otogsA
                        AGd8iT/zMQAAABw//qpdH4ktU47tzowVe+NL7fGCCwAA3/VFHgAAgOsdk+2NMKcc/50dLJbO+0Zi
                        ynLBzwkAwPt8Yf+u5wMAAGDOsdnasc0px3bPihHL4H3LBd4zAACMfrEHAADgGsdn647HHPbx5A++
                        TNoGAACu+KUeAACAax+nnXos952BY3mB9wgAAAAAAFzPetK2h1wlaCwv/v4BAPCFHgAAgB9+/HbV
                        aCGmAAAAAAAAPS7zn+ReLW6IMQAA+IIPAADwPnp/93fcBQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
                        AAAAAAAAAMDP8/8CDAC70A4mLrQCvQAAAABJRU5ErkJggg==" transform="matrix(0.48 0 0 0.48 -8.56 376.68)">
                    </image>
                    <g>
                        <linearGradient id="SVGID_3_" gradientUnits="userSpaceOnUse" x1="1040.3802" y1="809.5341" x2="-758.8033"
                        y2="-183.9281">
                        <stop offset="0" style="stop-color:#1F72AA" />
                        <stop offset="2.110190e-02" style="stop-color:#2577AF" />
                        <stop offset="0.1415" style="stop-color:#418EC7" />
                        <stop offset="0.2618" style="stop-color:#569FD9" />
                        <stop offset="0.3811" style="stop-color:#62A9E3" />
                        <stop offset="0.4979" style="stop-color:#66ACE7" />
                        <stop offset="1" style="stop-color:#345184" />
                        </linearGradient>
                        <path class="st4"
                        d="M0,384.8l-0.1,114.3c0.1,1.7,8.8,0.9,18.5,0.9l713.9-0.5c9.7,0,17.8,1,17.8,0L750,384.8H0z" />
                    </g>
                    </g>
                    <g class="st5">
                    <linearGradient id="SVGID_4_" gradientUnits="userSpaceOnUse" x1="583.0353" y1="279.5878" x2="211.9792"
                        y2="611.8126">
                        <stop offset="0.3425" style="stop-color:#66ACE7" />
                        <stop offset="1" style="stop-color:#0A3066" />
                    </linearGradient>
                    <path class="st6" d="M678.8,449.4c-23.7-0.9-49.7,0.4-70.7-2.4c-24.3-3.2-32.6-10.5-53.2-14.9c-7.1-1.5-16.5-2.7-26.1-2.4
                            c-24.1,0.9-27,9.8-49.8,11.8c-20.7,1.8-46-3.2-64.6-0.4c-9.9,1.5-14.5,4.9-26.1,5.3c-5.1,0.2-10.1-0.3-14.8-0.8
                            c-18.2-2.1-34.5-5-47.8-8.5c-5.4-1.4-10.4-3-17.2-4.1c-6.8-1.1-16.2-1.5-23.2-0.5c-6.9,1-10,3.1-17.3,3.9
                            c-9.6,1-20.2-0.8-26.8-2.7s-13.3-4.2-23.6-4.6c-5.5-0.2-11,0.2-16.6,0.2c-15.2,0-27.1-3-41.3-4.2c-18.8-1.6-42,0.3-52.4,4.3
                            c-6.1,2.3-8.7,5.4-18.7,6.8c-13.8,2-31-0.4-44.4-2.6c-13.3-2.1-32.8-4-44.2-1.3v67c0.3,1.1,7.9,0,17.6,0l714.8,0.4
                            c20.5,0.1,17.5,0,17.5-2.5v-34.7C738.2,455.8,710.1,450.6,678.8,449.4z" />
                    </g>
                    <g class="st7">
                    <path class="st8" d="M55.3,402.2c7.1,0,13.3,1,19.4,1.8c6.2,0.8,14.7,1.3,19.9,0.3c1.1-0.2,2.3-0.5,3.7-0.4
                            c0.7,0.1,1.2,0.2,1.6,0.3c3.7,1.2,8.1,2.3,13.2,3.3c4,0.8,9,1.5,14.2,1.3c6.5-0.2,10.3-1.6,11.4-3c0.3-0.3,0.5-0.7,1.5-0.9
                            c1.7-0.4,4.6-0.4,7.1-0.3c6.1,0.1,12.3,0.1,18.2-0.2c5.9-0.3,11.4-1,14.5-2.1" />
                    </g>
                    <g class="st7">
                    <path class="st8" d="M514.1,409.4c15.3,0.6,27.8,3.8,43.3,3.6c5.7-0.1,11.4-0.6,15.6-1.5c0.8-0.2,1.8-0.4,2.9-0.3
                            c1.1,0,1.7,0.3,2.2,0.5c3.5,1.4,9.4,2.4,15.4,3.3c6.2,0.9,12.7,1.8,19.9,2.2c7.2,0.4,15.1,0.3,21.4-0.6s10.4-2.7,8.8-4.3
                            c4.6,0.7,9.4,1.5,15,1.7c5.5,0.2,11.9-0.2,14.5-1.4c0.9-0.4,1.7-0.9,3.5-1c0.9,0,1.7,0.1,2.6,0.1c6.1,0.6,13.2,0.7,19.6,0.2
                            c9.6-0.7,17.3-2.7,27.3-3" />
                    </g>
                    <g>
                    <g>
                        <g>
                        <path class="st9" d="M120.3,427.9C120.3,427.9,120.3,427.8,120.3,427.9c0-0.1,0-0.1,0-0.1C120.3,427.8,120.2,427.8,120.3,427.9
                                    C120.2,427.8,120.3,427.9,120.3,427.9L120.3,427.9z" />
                        </g>
                    </g>
                    <g>
                        <g>
                        <path class="st9" d="M78.6,407.8c0,0,0.1,0,0.1,0c0,0,0,0,0,0c0,0,0,0,0-0.1c0,0,0-0.1,0-0.1c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0
                                    c0,0,0,0,0,0c0,0,0,0,0,0.1c0,0,0,0.1,0,0.1C78.6,407.8,78.6,407.8,78.6,407.8L78.6,407.8z" />
                        </g>
                    </g>
                    <g>
                        <g>
                        <path class="st9" d="M741.8,439.2C741.8,439.2,741.8,439.2,741.8,439.2C741.8,439.2,741.8,439.2,741.8,439.2
                                    c-0.1,0-0.1,0-0.2,0c0,0,0,0,0,0c0,0-0.1,0-0.1,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0
                                    c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0
                                    c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0.1,0,0.1,0c0,0,0,0,0,0C741.7,439.3,741.8,439.3,741.8,439.2
                                    C741.8,439.3,741.8,439.3,741.8,439.2C741.8,439.3,741.8,439.3,741.8,439.2c0,0,0.1,0,0.1,0c0,0,0,0,0,0c0,0,0,0,0-0.1
                                    c0,0,0-0.1,0-0.1c0,0-0.1-0.1-0.1-0.1c0,0-0.1,0-0.1,0c0,0,0,0-0.1,0c0,0,0,0-0.1,0c0,0-0.1,0-0.1,0c0,0,0,0-0.1,0
                                    c0,0,0,0-0.1,0c0,0-0.1,0.1-0.1,0.1c0,0,0,0,0,0.1c0,0,0,0,0,0.1c0,0,0,0,0,0.1c0,0,0,0,0,0.1c0,0,0,0,0,0c0,0,0,0,0,0
                                    c0,0,0,0,0.1,0c0,0,0,0,0.1,0c0,0,0,0,0,0c0,0,0.1,0,0.1,0c0.1,0,0.1,0,0.2,0c0,0,0,0,0,0c0,0,0,0,0.1,0c0,0,0,0,0,0
                                    c0,0,0,0,0-0.1c0,0,0,0,0-0.1c0,0,0-0.1-0.1-0.1C742,439.2,741.9,439.2,741.8,439.2C741.9,439.2,741.9,439.2,741.8,439.2
                                    L741.8,439.2z" />
                        </g>
                    </g>
                    <g>
                        <g>
                        <path class="st9" d="M289.1,402.7C289.1,402.7,289.2,402.7,289.1,402.7c0.1,0,0.2,0,0.2-0.1c0,0,0,0,0.1-0.1c0,0,0-0.1,0-0.1
                                    c0,0,0,0,0-0.1c0,0,0-0.1-0.1-0.1c0,0,0,0-0.1,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0.1c0,0,0,0-0.1,0.1
                                    c0,0,0,0.1,0,0.1c0,0,0,0,0,0.1c0,0,0,0.1,0.1,0.1c0,0,0,0,0.1,0C289,402.7,289.1,402.7,289.1,402.7L289.1,402.7z" />
                        </g>
                    </g>
                    <g>
                        <g>
                        <path class="st9"
                            d="M241.2,456.7C241.3,456.7,241.3,456.7,241.2,456.7c0.1,0,0.2,0,0.2-0.1c0,0,0,0,0.1-0.1c0,0,0-0.1,0-0.1
                                    c0,0,0,0,0-0.1c0,0,0-0.1-0.1-0.1c0,0,0,0-0.1,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0.1c0,0,0,0-0.1,0.1
                                    c0,0,0,0.1,0,0.1c0,0,0,0,0,0.1c0,0,0,0.1,0.1,0.1c0,0,0,0,0.1,0C241.2,456.7,241.2,456.7,241.2,456.7L241.2,456.7z" />
                        </g>
                    </g>
                    <g>
                        <g>
                        <path class="st9" d="M519.7,444C519.8,444,519.8,444,519.7,444c0.1,0,0.2,0,0.2-0.1c0,0,0,0,0.1-0.1c0,0,0-0.1,0-0.1
                                    c0,0,0,0,0-0.1c0,0,0-0.1-0.1-0.1c0,0,0,0-0.1,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0.1c0,0,0,0-0.1,0.1
                                    c0,0,0,0.1,0,0.1c0,0,0,0,0,0.1c0,0,0,0.1,0.1,0.1c0,0,0,0,0.1,0C519.7,444,519.7,444,519.7,444L519.7,444z" />
                        </g>
                    </g>
                    <g>
                        <g>
                        <path class="st9" d="M144.1,475C144.1,475,144.2,475,144.1,475c0.1,0,0.2,0,0.2-0.1c0,0,0,0,0.1-0.1c0,0,0-0.1,0-0.1
                                    c0,0,0,0,0-0.1c0,0,0-0.1-0.1-0.1c0,0,0,0-0.1,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0.1c0,0,0,0-0.1,0.1
                                    c0,0,0,0.1,0,0.1c0,0,0,0,0,0.1c0,0,0,0.1,0.1,0.1c0,0,0,0,0.1,0C144,475,144.1,475,144.1,475L144.1,475z" />
                        </g>
                    </g>
                    <g>
                        <g>
                        <path class="st9" d="M375.1,405.2c0,0,0.1,0,0.1,0c0,0,0.1,0,0.1-0.1c0,0,0-0.1,0.1-0.1c0,0,0-0.1,0-0.1c0,0,0-0.1,0-0.1
                                    c0-0.1,0-0.1-0.1-0.1c0,0,0,0-0.1,0c0,0-0.1,0-0.2,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0.1c0,0,0,0.1-0.1,0.1c0,0,0,0.1,0,0.1
                                    c0,0,0,0.1,0,0.1c0,0.1,0,0.1,0.1,0.1c0,0,0,0,0.1,0C375,405.2,375,405.2,375.1,405.2L375.1,405.2z" />
                        </g>
                    </g>
                    <g>
                        <g>
                        <path class="st9" d="M635.2,403.4c0,0,0.1,0,0.1,0c0,0,0.1,0,0.1-0.1c0,0,0-0.1,0.1-0.1c0,0,0-0.1,0-0.1c0,0,0-0.1,0-0.1
                                    c0-0.1,0-0.1-0.1-0.1c0,0,0,0-0.1,0c0,0-0.1,0-0.2,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0.1c0,0,0,0.1-0.1,0.1c0,0,0,0.1,0,0.1
                                    c0,0,0,0.1,0,0.1c0,0.1,0,0.1,0.1,0.1c0,0,0,0,0.1,0C635.1,403.4,635.1,403.4,635.2,403.4L635.2,403.4z" />
                        </g>
                    </g>
                    <g>
                        <g>
                        <path class="st9"
                            d="M660.3,459.8c0.1,0,0.1,0,0.2,0c0,0,0.1,0,0.1-0.1c0,0,0.1-0.1,0.1-0.1c0,0,0-0.1,0-0.2c0,0,0-0.1,0-0.1
                                    c0-0.1-0.1-0.1-0.1-0.2c0,0-0.1,0-0.1-0.1c-0.1,0-0.1-0.1-0.2-0.1c-0.1,0-0.1,0-0.2,0c0,0-0.1,0-0.1,0.1c0,0-0.1,0.1-0.1,0.1
                                    c0,0,0,0.1,0,0.2c0,0,0,0.1,0,0.1c0,0.1,0.1,0.1,0.1,0.2c0,0,0.1,0,0.1,0.1C660.1,459.8,660.2,459.8,660.3,459.8L660.3,459.8z" />
                        </g>
                    </g>
                    <g>
                        <g>
                        <path class="st9"
                            d="M453.5,439.8c0.1,0,0.1,0,0.2,0c0,0,0.1,0,0.1-0.1c0,0,0.1-0.1,0.1-0.1c0,0,0-0.1,0-0.2c0,0,0-0.1,0-0.1
                                    c0-0.1-0.1-0.1-0.1-0.2c0,0-0.1,0-0.1-0.1c-0.1,0-0.1-0.1-0.2-0.1c-0.1,0-0.1,0-0.2,0c0,0-0.1,0-0.1,0.1c0,0-0.1,0.1-0.1,0.1
                                    c0,0,0,0.1,0,0.2c0,0,0,0.1,0,0.1c0,0.1,0.1,0.1,0.1,0.2c0,0,0.1,0,0.1,0.1C453.4,439.8,453.4,439.8,453.5,439.8L453.5,439.8z" />
                        </g>
                    </g>
                    <g>
                        <g>
                        <path class="st9"
                            d="M560.6,393.6c0.1,0,0.1,0,0.2,0c0,0,0.1,0,0.1-0.1c0,0,0.1-0.1,0.1-0.1c0,0,0-0.1,0-0.2c0,0,0-0.1,0-0.1
                                    c0-0.1-0.1-0.1-0.1-0.2c0,0-0.1,0-0.1-0.1c-0.1,0-0.1-0.1-0.2-0.1c-0.1,0-0.1,0-0.2,0c0,0-0.1,0-0.1,0.1c0,0-0.1,0.1-0.1,0.1
                                    c0,0,0,0.1,0,0.2c0,0,0,0.1,0,0.1c0,0.1,0.1,0.1,0.1,0.2c0,0,0.1,0,0.1,0.1C560.5,393.6,560.6,393.6,560.6,393.6L560.6,393.6z" />
                        </g>
                    </g>
                    <g>
                        <g>
                        <path class="st9"
                            d="M66.5,440.4c0.1,0,0.1,0,0.2,0c0,0,0.1,0,0.1-0.1c0,0,0.1-0.1,0.1-0.1c0,0,0-0.1,0-0.2c0,0,0-0.1,0-0.1
                                    c0-0.1-0.1-0.1-0.1-0.2c0,0-0.1,0-0.1-0.1c-0.1,0-0.1-0.1-0.2-0.1c-0.1,0-0.1,0-0.2,0c0,0-0.1,0-0.1,0.1c0,0-0.1,0.1-0.1,0.1
                                    c0,0,0,0.1,0,0.2c0,0,0,0.1,0,0.1c0,0.1,0.1,0.1,0.1,0.2c0,0,0.1,0,0.1,0.1C66.4,440.3,66.5,440.4,66.5,440.4L66.5,440.4z" />
                        </g>
                    </g>
                    <g>
                        <g>
                        <path class="st9"
                            d="M654.6,491c0.1,0,0.1,0,0.2,0c0,0,0.1,0,0.1-0.1c0,0,0.1-0.1,0.1-0.1c0,0,0-0.1,0-0.2c0,0,0-0.1,0-0.1
                                    c0-0.1-0.1-0.1-0.1-0.2c0,0-0.1,0-0.1-0.1c-0.1,0-0.1-0.1-0.2-0.1c-0.1,0-0.1,0-0.2,0c0,0-0.1,0-0.1,0.1c0,0-0.1,0.1-0.1,0.1
                                    c0,0,0,0.1,0,0.2c0,0,0,0.1,0,0.1c0,0.1,0.1,0.1,0.1,0.2c0,0,0.1,0,0.1,0.1C654.5,491,654.6,491,654.6,491L654.6,491z" />
                        </g>
                    </g>
                    <g>
                        <g>
                        <path class="st9"
                            d="M84,491.4c0.1,0,0.1,0,0.2,0c0,0,0.1,0,0.1-0.1c0,0,0.1-0.1,0.1-0.1c0,0,0-0.1,0-0.2c0,0,0-0.1,0-0.1
                                    c0-0.1-0.1-0.1-0.1-0.2c0,0-0.1,0-0.1-0.1c-0.1,0-0.1-0.1-0.2-0.1c-0.1,0-0.1,0-0.2,0c0,0-0.1,0-0.1,0.1c0,0-0.1,0.1-0.1,0.1
                                    c0,0,0,0.1,0,0.2c0,0,0,0.1,0,0.1c0,0.1,0.1,0.1,0.1,0.2c0,0,0.1,0,0.1,0.1C83.9,491.4,84,491.4,84,491.4L84,491.4z" />
                        </g>
                    </g>
                    </g>
                    <linearGradient id="SVGID_5_" gradientUnits="userSpaceOnUse" x1="470.3816" y1="394.6411" x2="85.453"
                    y2="369.9148">
                    <stop offset="7.292849e-03" style="stop-color:#5A8FB2;stop-opacity:0" />
                    <stop offset="1" style="stop-color:#304B7C" />
                    </linearGradient>
                    <path class="st10" d="M0,380.5h500.2C197.1,370.1,60.9,371.7,0,374.9V380.5z" />
                    <g class="st11">
                    <linearGradient id="SVGID_6_" gradientUnits="userSpaceOnUse" x1="755.3762" y1="428.2034" x2="707.5528"
                        y2="355.6824">
                        <stop offset="7.292849e-03" style="stop-color:#5A8FB2;stop-opacity:0" />
                        <stop offset="1" style="stop-color:#304B7C" />
                    </linearGradient>
                    <path class="st12" d="M687.5,382.1c-1.2,0.8-2,1.7-2.3,2.7H750V357c-1.3-0.4-2.4-0.6-3.3-0.9c-4-0.9-8.2-1.6-12.5-1.9
                            c-2.6-0.2-5.2-0.3-7.7,0.1c-2.5,0.4-4.7,1.4-5,2.7c-0.3,1.3,1.4,2.6,3.4,3.4c2,0.9,4.4,1.5,6.3,2.4c-7.5-1.1-15.2-2-23-1.6
                            c-2,0.1-4.1,0.3-5.9,0.8c-1.8,0.5-3.2,1.4-3.4,2.4c-0.2,1.3,1.8,2.5,4.1,3c2.3,0.5,5,0.5,7.5,0.3s5.1-0.4,7.6-0.3
                            c-6.4,0.2-12.7,1-18.6,2.2c-4.2,0.9-8.2,2-11.2,3.7c-1.7,0.9-3,2.3-2.1,3.4c0.6,0.8,2,1.3,3.6,1.5c1.5,0.2,3.2,0.2,4.8,0.2
                            c3.5-0.1,6.9-0.4,10.2-0.9c-3.4,0.5-6.7,1.2-9.9,1.9C692.2,380.2,689.4,380.9,687.5,382.1z" />
                    </g>
                    <g class="st11">

                    <linearGradient id="SVGID_7_" gradientUnits="userSpaceOnUse" x1="519.3549" y1="411.771" x2="481.5636"
                        y2="354.4632" gradientTransform="matrix(-1 0 0 1 510.5359 0)">
                        <stop offset="7.292849e-03" style="stop-color:#5A8FB2;stop-opacity:0" />
                        <stop offset="1" style="stop-color:#304B7C" />
                    </linearGradient>
                    <path class="st13" d="M40.5,377.8c0.8,0.8,1.3,1.7,1.5,2.7H0l0-27.8c0.8-0.4,1.6-0.6,2.1-0.9c2.6-0.9,5.3-1.6,8.1-1.9
                            c1.7-0.2,3.4-0.3,5,0.1c1.6,0.4,3,1.4,3.2,2.7c0.2,1.3-0.9,2.6-2.2,3.4c-1.3,0.9-2.8,1.5-4.1,2.4c4.8-1.1,9.9-2,14.9-1.6
                            c1.3,0.1,2.7,0.3,3.8,0.8c1.1,0.5,2.1,1.4,2.2,2.4c0.1,1.3-1.1,2.5-2.7,3c-1.5,0.5-3.2,0.5-4.9,0.3c-1.6-0.2-3.3-0.4-4.9-0.3
                            c4.1,0.2,8.2,1,12,2.2c2.7,0.9,5.3,2,7.2,3.7c1.1,0.9,1.9,2.3,1.4,3.4c-0.4,0.8-1.3,1.3-2.3,1.5c-1,0.2-2.1,0.2-3.1,0.2
                            c-2.2-0.1-4.5-0.4-6.6-0.9c2.2,0.5,4.3,1.2,6.4,1.9C37.4,375.8,39.2,376.6,40.5,377.8z" />
                    </g>
                    <g class="st11">
                    <linearGradient id="SVGID_8_" gradientUnits="userSpaceOnUse" x1="763.4173" y1="413.8159" x2="724.8491"
                        y2="355.3297">
                        <stop offset="7.292849e-03" style="stop-color:#5A8FB2;stop-opacity:0" />
                        <stop offset="1" style="stop-color:#304B7C" />
                    </linearGradient>
                    <path class="st14" d="M718.7,380.9c-1.2,1.1-2,2.5-2.3,3.9H750v-33.6c-3.7-0.4-7.4-0.6-11.1-0.4c-2,0.1-4,0.4-5.7,1.1
                            c-1.7,0.7-3.1,2-3.3,3.5c-0.2,1.9,1.7,3.6,4,4.3c2.3,0.7,4.9,0.7,7.3,0.5c2.5-0.2,4.9-0.6,7.4-0.4c-6.2,0.3-12.4,1.4-18.1,3.2
                            c-4,1.3-8,2.9-10.9,5.4c-1.6,1.4-2.9,3.3-2,5c0.6,1.1,2,1.9,3.5,2.2c1.5,0.3,3.1,0.3,4.7,0.2c3.4-0.2,6.7-0.6,10-1.3
                            c-3.3,0.8-6.5,1.7-9.6,2.7C723.3,378.1,720.6,379.2,718.7,380.9z" />
                    </g>
                    <g class="test">
                    <g class="st15">
                        <path class="st8" d="M162.4,185.2c2.6,0.1,4.8-1.8,7.1-3.2c2.2-1.4,5.3-2.3,7.3-0.6c0.4,0.4,0.9,0.9,1.4,0.7
                    c0.3-0.1,0.4-0.4,0.6-0.6c1.3-2.1,2.9-4,4.7-5.7c1.4-1.3,3.2-2.5,5.1-2.3c2.4,0.3,3.9,2.8,4.4,5.2c0.1,0.6,0.2,1.2,0.6,1.6
                    c0.6,0.7,1.7,0.6,2.6,0.5c2.2-0.2,4.5-0.2,6.7,0.4c2.2,0.6,4.2,1.8,5.4,3.7" />
                    </g>
                    </g>
                    <g class="test">
                    <g class="st15">
                        <path class="st8" d="M70,100c2.3-2.8,6.2-3.8,9.8-3.7c3.6,0.1,7.1,1,10.7,1.3c3.6,0.3,7.5-0.1,10.3-2.3c2.3-1.8,3.6-4.6,6.2-6
                            c3.9-2.2,8.7-0.3,12.7,1.6c1.4-4,4.4-7.7,8.5-8.7c4.1-1,9.1,1.8,9.4,6c0.1,1.5-0.3,3.2,0.7,4.3c0.7,0.8,1.8,1,2.8,1.1
                            c3.3,0.4,6.7,0.1,10,0.7c3.3,0.6,6.6,2.3,8,5.4" />
                    </g>
                    </g>
                    <g class="test">
                    <g class="st15">
                        <path class="st8" d="M533.5,184c2.6-3.2,7.1-4.4,11.3-4.3c4.2,0.1,8.3,1.2,12.4,1.5c4.2,0.4,8.6-0.1,11.9-2.6
                            c2.6-2.1,4.2-5.3,7.1-6.9c4.5-2.5,10-0.3,14.7,1.9c1.6-4.6,5.1-8.9,9.9-10.1c4.8-1.1,10.5,2.1,10.9,7c0.1,1.7-0.3,3.7,0.8,5
                            c0.8,0.9,2.1,1.2,3.2,1.3c3.8,0.4,7.8,0.1,11.6,0.8c3.8,0.7,7.7,2.7,9.2,6.2" />
                    </g>
                    </g>
                    <g class="test">
                    <g class="st15">
                        <path class="st8" d="M549.6,108.6c11.1-2.1,20.2-12.2,31.5-11.9c4.2,0.1,8.4,1.8,11.5,4.6c0.6,0.6,1.3,1.2,2.2,1.1
                            c0.8-0.1,1.2-1,1.6-1.7c2.5-4.5,6.8-7.8,11.1-10.6c4.5-3,9.3-5.7,14.5-7c5.2-1.3,11-1.1,15.7,1.7c4.6,2.8,7.7,8.3,6.6,13.6
                            c3.3-2.4,6.9-4.7,10.9-5.5c4-0.7,8.7,0.6,10.7,4.2c0.7,1.2,1.2,2.9,2.6,3c0.7,0.1,1.3-0.2,1.9-0.5c4.5-2,9.7-2.3,14.3-0.8
                    c7.1,2.2,12.7,8.3,20.1,9.1" />
                    </g>
                    </g>
                    <g>
                    <g>
                        <path class="st9" d="M28.9,79C28.9,79,29,78.9,28.9,79C29,78.9,28.9,78.9,28.9,79C28.9,78.9,28.9,78.9,28.9,79
                                C28.9,78.9,28.9,79,28.9,79L28.9,79z" />
                    </g>
                    </g>
                    <g>
                    <g>
                        <path class="st9" d="M13.6,58.9c0,0,0.1,0,0.1,0c0,0,0,0,0,0c0,0,0,0,0-0.1c0,0,0-0.1,0-0.1c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0
                                c0,0,0,0,0,0c0,0,0,0,0,0.1c0,0,0,0.1,0,0.1C13.5,58.9,13.5,58.9,13.6,58.9L13.6,58.9z" />
                    </g>
                    </g>
                    <g>
                    <g>
                        <path class="st9" d="M424.5,13.2C424.5,13.2,424.6,13.2,424.5,13.2c0.1,0,0.2,0,0.2-0.1c0,0,0,0,0.1-0.1c0,0,0-0.1,0-0.1
                                c0,0,0,0,0-0.1c0,0,0-0.1-0.1-0.1c0,0,0,0-0.1,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0.1c0,0,0,0-0.1,0.1
                                c0,0,0,0.1,0,0.1c0,0,0,0,0,0.1c0,0,0,0.1,0.1,0.1c0,0,0,0,0.1,0C424.4,13.2,424.5,13.2,424.5,13.2L424.5,13.2z" />
                    </g>
                    </g>
                    <g>
                    <g>
                        <path class="st9"
                        d="M553.8,229.6C553.8,229.6,553.9,229.6,553.8,229.6c0.1,0,0.2,0,0.2-0.1c0,0,0,0,0.1-0.1c0,0,0-0.1,0-0.1
                                c0,0,0,0,0-0.1c0,0,0-0.1-0.1-0.1c0,0,0,0-0.1,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0.1c0,0,0,0-0.1,0.1
                                c0,0,0,0.1,0,0.1c0,0,0,0,0,0.1c0,0,0,0.1,0.1,0.1c0,0,0,0,0.1,0C553.7,229.6,553.8,229.6,553.8,229.6L553.8,229.6z" />
                    </g>
                    </g>
                    <g>
                    <g>
                        <path class="st9" d="M291.7,16.5C291.8,16.5,291.8,16.5,291.7,16.5c0.1,0,0.2,0,0.2-0.1c0,0,0,0,0.1-0.1c0,0,0-0.1,0-0.1
                                c0,0,0,0,0-0.1c0,0,0-0.1-0.1-0.1c0,0,0,0-0.1,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0.1c0,0,0,0-0.1,0.1
                                c0,0,0,0.1,0,0.1c0,0,0,0,0,0.1c0,0,0,0.1,0.1,0.1c0,0,0,0,0.1,0C291.7,16.5,291.7,16.5,291.7,16.5L291.7,16.5z" />
                    </g>
                    </g>
                    <g>
                    <g>
                        <path class="st9" d="M726,63.3C726,63.3,726.1,63.3,726,63.3c0.1,0,0.2,0,0.2-0.1c0,0,0,0,0.1-0.1c0,0,0-0.1,0-0.1
                                c0,0,0,0,0-0.1c0,0,0-0.1-0.1-0.1c0,0,0,0-0.1,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0.1c0,0,0,0-0.1,0.1
                                c0,0,0,0.1,0,0.1c0,0,0,0,0,0.1c0,0,0,0.1,0.1,0.1c0,0,0,0,0.1,0C725.9,63.3,725.9,63.3,726,63.3L726,63.3z" />
                    </g>
                    </g>
                    <g>
                    <g>
                        <path class="st9"
                        d="M614.5,136.6C614.5,136.6,614.5,136.6,614.5,136.6c0.1,0,0.2,0,0.2-0.1c0,0,0,0,0.1-0.1c0,0,0-0.1,0-0.1
                                c0,0,0,0,0-0.1c0,0,0-0.1-0.1-0.1c0,0,0,0-0.1,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0.1c0,0,0,0-0.1,0.1
                                c0,0,0,0.1,0,0.1c0,0,0,0,0,0.1c0,0,0,0.1,0.1,0.1c0,0,0,0,0.1,0C614.4,136.6,614.4,136.6,614.5,136.6L614.5,136.6z" />
                    </g>
                    </g>
                    <g>
                    <g>
                        <path class="st9" d="M175.8,95.1C175.9,95.1,175.9,95.1,175.8,95.1c0.1,0,0.2,0,0.2-0.1c0,0,0,0,0.1-0.1c0,0,0-0.1,0-0.1
                                c0,0,0,0,0-0.1c0,0,0-0.1-0.1-0.1c0,0,0,0-0.1,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0.1c0,0,0,0-0.1,0.1
                                c0,0,0,0.1,0,0.1c0,0,0,0,0,0.1c0,0,0,0.1,0.1,0.1c0,0,0,0,0.1,0C175.8,95.1,175.8,95.1,175.8,95.1L175.8,95.1z" />
                    </g>
                    </g>
                    <g>
                    <g>
                        <path class="st9" d="M560.6,41.5C560.7,41.5,560.7,41.5,560.6,41.5c0.1,0,0.2,0,0.2-0.1c0,0,0,0,0.1-0.1c0,0,0-0.1,0-0.1
                                c0,0,0,0,0-0.1c0,0,0-0.1-0.1-0.1c0,0,0,0-0.1,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0.1c0,0,0,0-0.1,0.1
                                c0,0,0,0.1,0,0.1c0,0,0,0,0,0.1c0,0,0,0.1,0.1,0.1c0,0,0,0,0.1,0C560.5,41.5,560.6,41.5,560.6,41.5L560.6,41.5z" />
                    </g>
                    </g>
                    <g>
                    <g>
                        <path class="st9" d="M144.1,13.3c0,0,0.1,0,0.1,0c0,0,0.1,0,0.1-0.1c0,0,0-0.1,0.1-0.1c0,0,0-0.1,0-0.1c0,0,0-0.1,0-0.1
                                c0-0.1,0-0.1-0.1-0.1c0,0,0,0-0.1,0c0,0-0.1,0-0.2,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0.1c0,0,0,0.1-0.1,0.1c0,0,0,0.1,0,0.1
                                c0,0,0,0.1,0,0.1c0,0.1,0,0.1,0.1,0.1c0,0,0,0,0.1,0C144,13.3,144.1,13.3,144.1,13.3L144.1,13.3z" />
                    </g>
                    </g>
                    <g>
                    <g>
                        <path class="st9" d="M218.3,54.5c0,0,0.1,0,0.1,0c0,0,0.1,0,0.1-0.1c0,0,0-0.1,0.1-0.1c0,0,0-0.1,0-0.1c0,0,0-0.1,0-0.1
                                c0-0.1,0-0.1-0.1-0.1c0,0,0,0-0.1,0c0,0-0.1,0-0.2,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0.1c0,0,0,0.1-0.1,0.1c0,0,0,0.1,0,0.1
                                c0,0,0,0.1,0,0.1c0,0.1,0,0.1,0.1,0.1c0,0,0,0,0.1,0C218.2,54.5,218.2,54.5,218.3,54.5L218.3,54.5z" />
                    </g>
                    </g>
                    <g>
                    <g>
                        <path class="st9"
                        d="M685.2,162c0.1,0,0.1,0,0.2,0c0,0,0.1,0,0.1-0.1c0,0,0.1-0.1,0.1-0.1c0,0,0-0.1,0-0.2c0,0,0-0.1,0-0.1
                                c0-0.1-0.1-0.1-0.1-0.2c0,0-0.1,0-0.1-0.1c-0.1,0-0.1-0.1-0.2-0.1c-0.1,0-0.1,0-0.2,0c0,0-0.1,0-0.1,0.1c0,0-0.1,0.1-0.1,0.1
                                c0,0,0,0.1,0,0.2c0,0,0,0.1,0,0.1c0,0.1,0.1,0.1,0.1,0.2c0,0,0.1,0,0.1,0.1C685,162,685.1,162,685.2,162L685.2,162z" />
                    </g>
                    </g>
                    <g>
                    <g>
                        <path class="st9"
                        d="M113.7,227.2c0.1,0,0.1,0,0.2,0c0,0,0.1,0,0.1-0.1c0,0,0.1-0.1,0.1-0.1c0,0,0-0.1,0-0.2c0,0,0-0.1,0-0.1
                                c0-0.1-0.1-0.1-0.1-0.2c0,0-0.1,0-0.1-0.1c-0.1,0-0.1-0.1-0.2-0.1c-0.1,0-0.1,0-0.2,0c0,0-0.1,0-0.1,0.1c0,0-0.1,0.1-0.1,0.1
                                c0,0,0,0.1,0,0.2c0,0,0,0.1,0,0.1c0,0.1,0.1,0.1,0.1,0.2c0,0,0.1,0,0.1,0.1C113.6,227.2,113.6,227.2,113.7,227.2L113.7,227.2z" />
                    </g>
                    </g>
                    <g>
                    <g>
                        <path class="st9"
                        d="M679.2,200.4c0.1,0,0.1,0,0.2,0c0,0,0.1,0,0.1-0.1c0,0,0.1-0.1,0.1-0.1c0,0,0-0.1,0-0.2c0,0,0-0.1,0-0.1
                                c0-0.1-0.1-0.1-0.1-0.2c0,0-0.1,0-0.1-0.1c-0.1,0-0.1-0.1-0.2-0.1c-0.1,0-0.1,0-0.2,0c0,0-0.1,0-0.1,0.1c0,0-0.1,0.1-0.1,0.1
                                c0,0,0,0.1,0,0.2c0,0,0,0.1,0,0.1c0,0.1,0.1,0.1,0.1,0.2c0,0,0.1,0,0.1,0.1C679.1,200.3,679.1,200.4,679.2,200.4L679.2,200.4z" />
                    </g>
                    </g>
                    <g>
                    <g>
                        <path class="st9"
                        d="M632.3,44.8c0.1,0,0.1,0,0.2,0c0,0,0.1,0,0.1-0.1c0,0,0.1-0.1,0.1-0.1c0,0,0-0.1,0-0.2c0,0,0-0.1,0-0.1
                                c0-0.1-0.1-0.1-0.1-0.2c0,0-0.1,0-0.1-0.1c-0.1,0-0.1-0.1-0.2-0.1c-0.1,0-0.1,0-0.2,0c0,0-0.1,0-0.1,0.1c0,0-0.1,0.1-0.1,0.1
                                c0,0,0,0.1,0,0.2c0,0,0,0.1,0,0.1c0,0.1,0.1,0.1,0.1,0.2c0,0,0.1,0,0.1,0.1C632.1,44.7,632.2,44.8,632.3,44.8L632.3,44.8z" />
                    </g>
                    </g>
                    <g>
                    <g>
                        <path class="st9" d="M9.1,91.5c0.1,0,0.1,0,0.2,0c0,0,0.1,0,0.1-0.1c0,0,0.1-0.1,0.1-0.1c0,0,0-0.1,0-0.2c0,0,0-0.1,0-0.1
                                c0-0.1-0.1-0.1-0.1-0.2c0,0-0.1,0-0.1-0.1c-0.1,0-0.1-0.1-0.2-0.1c-0.1,0-0.1,0-0.2,0c0,0-0.1,0-0.1,0.1c0,0-0.1,0.1-0.1,0.1
                                c0,0,0,0.1,0,0.2c0,0,0,0.1,0,0.1c0,0.1,0.1,0.1,0.1,0.2c0,0,0.1,0,0.1,0.1C9,91.4,9.1,91.5,9.1,91.5L9.1,91.5z" />
                    </g>
                    </g>
                    <g>
                    <g>
                        <path class="st9" d="M42,16.6c0.1,0,0.1,0,0.2,0c0,0,0.1,0,0.1-0.1c0,0,0.1-0.1,0.1-0.1c0,0,0-0.1,0-0.2c0,0,0-0.1,0-0.1
                                c0-0.1-0.1-0.1-0.1-0.2c0,0-0.1,0-0.1-0.1c-0.1,0-0.1-0.1-0.2-0.1c-0.1,0-0.1,0-0.2,0c0,0-0.1,0-0.1,0.1c0,0-0.1,0.1-0.1,0.1
                                c0,0,0,0.1,0,0.2c0,0,0,0.1,0,0.1c0,0.1,0.1,0.1,0.1,0.2c0,0,0.1,0,0.1,0.1C41.8,16.6,41.9,16.6,42,16.6L42,16.6z" />
                    </g>
                    </g>
                    <g>
                    <g>
                        <path class="st9"
                        d="M113.7,136.8c0.1,0,0.1,0,0.2,0c0,0,0.1,0,0.1-0.1c0,0,0.1-0.1,0.1-0.1c0,0,0-0.1,0-0.2c0,0,0-0.1,0-0.1
                                c0-0.1-0.1-0.1-0.1-0.2c0,0-0.1,0-0.1-0.1c-0.1,0-0.1-0.1-0.2-0.1c-0.1,0-0.1,0-0.2,0c0,0-0.1,0-0.1,0.1c0,0-0.1,0.1-0.1,0.1
                                c0,0,0,0.1,0,0.2c0,0,0,0.1,0,0.1c0,0.1,0.1,0.1,0.1,0.2c0,0,0.1,0,0.1,0.1C113.6,136.8,113.6,136.8,113.7,136.8L113.7,136.8z" />
                    </g>
                    </g>
                    <g>
                    <g>
                        <path class="st9"
                        d="M225.5,142.1c0.1,0,0.1,0,0.2,0c0,0,0.1,0,0.1-0.1c0,0,0.1-0.1,0.1-0.1c0,0,0-0.1,0-0.2c0,0,0-0.1,0-0.1
                                c0-0.1-0.1-0.1-0.1-0.2c0,0-0.1,0-0.1-0.1c-0.1,0-0.1-0.1-0.2-0.1c-0.1,0-0.1,0-0.2,0c0,0-0.1,0-0.1,0.1c0,0-0.1,0.1-0.1,0.1
                                c0,0,0,0.1,0,0.2c0,0,0,0.1,0,0.1c0,0.1,0.1,0.1,0.1,0.2c0,0,0.1,0,0.1,0.1C225.3,142.1,225.4,142.1,225.5,142.1L225.5,142.1z" />
                    </g>
                    </g>
                    <g>
                    <g>
                        <path class="st9"
                        d="M560.6,144.1c0.1,0,0.1,0,0.2,0c0,0,0.1,0,0.1-0.1c0,0,0.1-0.1,0.1-0.1c0,0,0-0.1,0-0.2c0,0,0-0.1,0-0.1
                                c0-0.1-0.1-0.1-0.1-0.2c0,0-0.1,0-0.1-0.1c-0.1,0-0.1-0.1-0.2-0.1c-0.1,0-0.1,0-0.2,0c0,0-0.1,0-0.1,0.1c0,0-0.1,0.1-0.1,0.1
                                c0,0,0,0.1,0,0.2c0,0,0,0.1,0,0.1c0,0.1,0.1,0.1,0.1,0.2c0,0,0.1,0,0.1,0.1C560.5,144,560.6,144.1,560.6,144.1L560.6,144.1z" />
                    </g>
                    </g>
                    <linearGradient id="SVGID_9_" gradientUnits="userSpaceOnUse" x1="73.9717" y1="166.8817" x2="41.3644"
                    y2="200.7401">
                    <stop offset="7.292849e-03" style="stop-color:#FFFFFF;stop-opacity:0" />
                    <stop offset="1" style="stop-color:#FFFFFF" />
                    </linearGradient>
                    <path class="st16"
                    d="M75.9,163.6l-16.3,15.6c-1.1,1.1-2.5,2.6-2.4,4.1c0.1,1.6,2,1.4,4.1-0.8C65.6,177.9,75.9,163.6,75.9,163.6z" />
                    <linearGradient id="SVGID_10_" gradientUnits="userSpaceOnUse" x1="637.2731" y1="206.8983" x2="604.6658"
                    y2="240.7567">
                    <stop offset="7.292849e-03" style="stop-color:#FFFFFF;stop-opacity:0" />
                    <stop offset="1" style="stop-color:#FFFFFF" />
                    </linearGradient>
                    <path class="st17" d="M639.2,203.6l-16.3,15.6c-1.1,1.1-2.5,2.6-2.4,4.1c0.1,1.6,2,1.4,4.1-0.8C629,217.9,639.2,203.6,639.2,203.6
                        z" />
                    <linearGradient id="SVGID_11_" gradientUnits="userSpaceOnUse" x1="161.5095" y1="41.7179" x2="146.0012"
                    y2="57.8212">
                    <stop offset="7.292849e-03" style="stop-color:#FFFFFF;stop-opacity:0" />
                    <stop offset="1" style="stop-color:#FFFFFF" />
                    </linearGradient>
                    <path class="st18"
                    d="M162.4,40.2l-7.7,7.4c-0.5,0.5-1.2,1.2-1.1,2c0.1,0.7,1,0.7,1.9-0.4C157.6,47,162.4,40.2,162.4,40.2z" />
                </g>
                <g class="st19">

                    <image style="display:inline;overflow:visible;opacity:0.28;" width="639" height="895" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAoIAAAOCCAYAAADjh7OhAAAACXBIWXMAABcRAAAXEQHKJvM/AAAA
                        GXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAH9FJREFUeNrs3Q1v6jiYgFEnMLP/
                        /+/OLclqpaLNdf3xOgmUlnMkVEqB0twZ6ZEdOykBAAAAAAAAAAAAAAAAAAA/2+TvAQDYbRVOPjcA
                        wI8LxJ8SVNMv//sAgN8deC8Zhq8aStMP//wAgFB8+TB8pZCaTniOMAQAXin81hPe41eH4DT4s+kB
                        f4+ABAAxd/Zr1xOe/2tDcAo+Pu18ncgDAB4diyOPrwff81eEYCTYpmAIHo1EAICzInAdiL5IFD48
                        CJ8ZSL1Ii4TgyHOFIADwrBAs3V8Dz+397KFB+KxAmgIBOAV+NhKFe/9O0QgA7xt3R0Ow9Vg0EJ82
                        Zfzo6Okt9pgCkVe634vEyO8GANgTgZHYu9/vxWA0Eh8Sg9cnRmAk9Eo/iz639juEIADwzBBs3Z9S
                        fEuZqfD7pjOD8BFhNDINPHXuTwfDsPd3CkMAoBd+pcfXgRAs3UrPzR8rvX/ks35bCEYjMBqAtVsv
                        IvPPIgQBgLNCcHQU8H5bgkE4Ml18KAafNTU8MtqX3+aB19SisBd9ghAAxF80AFvBVwrAewROlShM
                        qT5lnE8nR6eWnx6CUycCR0b+5sHvR0YHW+EnCAFAANYCsDYSWArBfPRvKkThUnhtGozBQ2F4Vgi2
                        wmrkNhfuz43HezEoBAGAM0Mweg7gkt2fN49NjRishWFrocnuGHzE1PDo+X5zI/zmyvetEJx2hqAI
                        BAAxuDcEl8L90tdl0yh5DC6BzzqlsdXHDw/BaWcE1gIwciuNFIpBAOBZIRiJwKXy/a0Sgyl7n5EY
                        3BWGR0OwFlNHAvBSud+Kwt4IYS1YRSAAMLJXYC0CS8FXut024XfLInDaPG9+Rgw+arFILQx7o3+X
                        TfxdBsIwMlUsBgGAMyMwGoC3RgTmo4N3IzG425EQPDIlXBoBvBRCsPR9LQqNCgIAZ4RgHoBpMAJv
                        2f3L59d7s+QReKs0SCkGeyuHh+Lw7BHBkQDMY2/kVhoxbK0oTqm/pQwAwN7RwDz+btn92qltt06X
                        LOnvy8pNjSActjcEo1ftaAVhHnfXwv1r5ee1UcJaDB4JQcEIAL8r8CLP640I5qOBpfjLbx+pPnt5
                        63yupdIkh0YFz9xHcHQ6uBZ91+xWC8NLIQRrK4qjISj6AOC94zASgrWVwK0AvI8KfqTy6Wutz1h6
                        7pr1y7fsIziyargUgrX4u9/+KTynNTpY2nvwyJVGxCEA/N7oq/1sZDSwNQp4D8BLqo8Glj7L9jZv
                        YjDflDr/vE9ZNTx1wi9V4m9K5cUhpfC73/+nEoi1GJwbIRhZMCL6AOB943DPljGtUcDrJgBbV0RL
                        nd87fz62ZK9rjQqGovDsK4v0podLK4IvhfD7p/B9LQhbMdg64FYQA4D4qwVgLQJrq4Q/CiH4kb6u
                        ZYiOBl7S16uYbF97yqjg0e1jetf5jUbgtRCA/wSCcDsyWNtSpjUqaEQQAERh/n1tarh3buDH5ms+
                        UNWKwFpwbmNwTuXzBQ+dKzgaglPg55FzA1vTwvfw+7dwvxaDvYUjZ0egYASAnxN4R2OwF4If6etI
                        4P32Z2cE5gG4Ft6nNioYDsNn7SPYWzVci8B/s/ulGKyNCkZXD4/GnQgEgN8bgyMhWBsNvAfgJbVP
                        U+tNPc9ZCJaCcK20ykO3j4mc7NjaRHpO/Wnhf7NbLwaPnicoBgHg/UJw74hgbYHINgL/qzRI65zD
                        0ubTS6O5di0S2ROCe6aFI1cUqcXgv5VbbTVxKQbzaxynQAwKPQB4z1AsLRRJmwCsbSC9HQ0cicDS
                        dYkv2fe1GDxlevhZG0pH9hHcjvTlU8P/k76OCtbOFcz3FHzUeYIAwO8LwtKIYCsEb+n/t4m5t8if
                        wQi8pb8HtLajgpHGeuol5qbA973Lys2pvJl0PiIYmSLujQhuv6Z03vQwAPA7IzCPtta2Mds9A/+k
                        +grh7fvU9h6sxWBpVDBvl+GFIntDMKX2ljEptaeFa5tJl4Lw30oQ5tvKtM4TjI4ICkAAeO8Y7E0N
                        10Jwe+WQObVXB98++6UVg5H1DqXp4Ydda3h0a5XIxtK1rWRKm0qXVhFvb/fXz6l9nmBK4xtLAwDv
                        G4GtFcP38wNr+wVu32/JInAbg/l7RKeIa70WHh084xzBkXMDa6OD14EY7J0nOKf69LBzBAGAXgy2
                        rjFcWuF7S+3tYWoReD+38FqIwejuJ4fOEzwagq2Q2rOfYG+qOA/DbTTmo4KlEBSBAMCeGCyNCN5b
                        4yOVR+mWTgReswgsTQnXWuaU8wTPuLJI5BJzvQiMTBXXrkFcOk+wdBBTMi0MAOwLwXxEsDRqV4rA
                        7bmE1/R1UUjtCmm13U9OXTl8PflAthaL9KaJW5efa12K7n6/NCJYmxYWgwBALQK3AZhSeTPp3sKQ
                        0mjgdiq4diGM0q13buBu1wcc0NZVRiJXG7mkr6uA8/MAS2HYusxcadSy9FmFIAC8bwimFJsanlL9
                        ah9L+v+Rv/vXj1Tf5eQyEICnx2AkBFv7BJaeN7q5dCkGS5egyyPwUvja2z4mpdiVRUQhALxP/JUe
                        z7ePyffxu6XyyuBrFoP3TqmtDN4bgNHzBJs/O2OxSG2kbU8Qlg5OHoaXRgReAwc0pfqIoBAEgPeM
                        wFYIbiNwu0r4tnn+dsSwdf5fJABb5x/2Vg5Pwb/1lBAcjcXaapjSuYKlUcLaz2vPLR3E6IggAPCe
                        gVjaR/DeD0vWD+umP5bUXgDSmwY+OiI47MwQ3DMqGDlB8pJi5xWWfuYcQQAgEn8p9fcRzANs/WyO
                        +0hg77S3XvtMA7dTjITgNPCcqfOzkUicgiU9stLGiCAAkE+jTp0Q3I4Ibh+vBWBpsWx0O5gz/8b1
                        jBAcDcNagI2MEk6NA9mbTx+9qogoBID3shYaYHvd3il93Udw3sTfdhVxa5q39tieUcDe+oah/QTP
                        XiySUvv6d5Erj5S+b8Vd7XzDWnGLQACgFk55BG7NmxhM6e/p4FanREcBe6OBpfUOhzaVvj7hAEcC
                        MHplkqlR0nPntUkIAgCBGCz9fCl0Sr6auNUpo6N+kUB8ucUirXPvWn/MnoOxdyhVDAIAd2saXwdx
                        RtRFf/5Q12888LUDkVJsf8JUeV3qvG9KFosAAF87YLsyOJ8ebm1DNzIIFdkWptdOPyYEoyc4tq79
                        29rqZaqUeut9jQgCAHn8bTsgXzCSssdTig00tUb+Umrvc5zSE0YI528o7kgFj8yTR4dco/9QAMD7
                        6PVI6jzempVsdUbkdLqHuz7wgB4JxdqBGf09oyOCrdcDAD9fb2HI/Tl7LtnWa5jevsbRhjotFK8/
                        5B9tzzmCR34PAPA7TQNhGGmS3v2X7ov5pIN4NKqiVyQZeY+R9zI1DADvG4aRKeDa46N9Mto3j2i0
                        wyG490NNB/5R9jzn9AMGAPzaIDzzPaYTfk/0oh27zU84qJGTKHuV3ZoaPiMqAQCOBF6vfSJfnxaA
                        Z4fg9OR/hF7oRaLyWZ8bAPi5wRe9xu8ZI4BPb7D5h/2jAAD8xEZ5yZ6Zf/ABHalxAIBHNMuP3qlk
                        9g8IAPCefTC/yMEWZQDAO4fnt7TQ7PgDALwnIQgAIAQBABCCr8F5gwDAb/JyO5zML3ygxCAAwBuG
                        IAAAQhAAACEIAIAQBABACAIAIAQBABCCAAAIQQAAhCAAAEIQAEAIAgAgBAEAEIIAAAhBAACEIAAA
                        QhAAACEIAIAQBABACAIAIAQBABCCAAAIQQAAhCAAAEIQAAAhCACAEAQAQAgCACAEAQAQggAACEEA
                        AIQgAABCEAAAIQgAgBAEABCCAAAIQQAAhCAAAEIQAAAhCACAEAQAQAgCACAEAQAQggAACEEAAIQg
                        AABCEAAAIQgAgBAEAEAIAgAgBAEAEIIAAAhBAACEIAAAQhAAACEIAIAQBABACAIACEEAAIQgAABC
                        EAAAIQgAgBAEAEAIAgAgBAEAEIIAAAhBAACEIAAAQhAAACEIAIAQBABACAIAIAQBABCCAAAIQQAA
                        hCAAAEIQAAAhCACAEAQAQAgCACAEAQAQggAAQhAAACEIAIAQBABACAIAIAQBABCCAAAIQQAAhCAA
                        AEIQAAAhCACAEAQAQAgCACAEAQAQggAACEEAAIQgAABCEAAAIQgAgBAEAEAIAgAgBAEAEIIAAAhB
                        AAAhCACAEAQAQAgCACAEAQAQggAACEEAAIQgAABCEAAAIQgAgBAEAEAIAgAgBAEAEIIAAAhBAACE
                        IAAAQhAAACEIAIAQBABACAIAIAQBABCCAAAIQQAAhCAAgBB0CAAAhCAAAEIQAAAhCACAEAQAQAgC
                        ACAEAQAQggAACEEAAIQgAABCEAAAIQgAgBAEAEAIAgAgBAEAEIIAAAhBAACEIAAAQhAAACEIAIAQ
                        BABACAIAIAQBABCCAABCEAAAIQgAgBAEAEAIAgAgBAEAEIIAAAhBAACEIAAAQhAAACEIAIAQBABA
                        CAIAIAQBABCCAAAIQQAAhCAAAEIQAAAhCACAEAQAQAgCACAEAQAQggAACEEAACEIAIAQBABACAIA
                        IAQBABCCAAAIQQAAhCAAAEIQAAAhCACAEAQAQAgCACAEAQAQggAACEEAAIQgAABCEAAAIQgAgBAE
                        AEAIAgAgBAEAEIIAAAhBAACEIAAAQhAAQAgCACAEAQAQggAACEEAAIQgAABCEAAAIQgAgBAEAEAI
                        AgAgBAEAEIIAAAhBAACEIAAAQhAAACEIAIAQBABACAIAIAQBABCCAAAIQQAAhCAAAEIQAAAhCAAg
                        BAEAEIIAAAhBAACEIAAAQhAAACEIAIAQBABACAIAIAQBABCCAAAIQQAAhCAAAEIQAAAhCACAEAQA
                        QAgCACAEAQAQggAACEEAAIQgAABCEAAAIQgAgBAEAEAIAgAIQQAAhCAAAEIQAAAhCACAEAQAQAgC
                        ACAEAQAQggAACEEAAIQgAABCEAAAIQgAgBAEAEAIAgAgBAEAEIIAAAhBAACEIAAAQhAAACEIAIAQ
                        BABACAIAIAQBAIQgAABCEAAAIQgAgBAEAEAIAgAgBAEAEIIAAAhBAACEIAAAQhAAACEIAIAQBABA
                        CAIAIAQBABCCAAAIQQAAhCAAAEIQAAAhCACAEAQAQAgCACAEAQAQggAACEEAACEIAIAQBABACAIA
                        IAQBABCCAAAIQQAAhCAAAEIQAAAhCACAEAQAQAgCACAEAQAQggAACEEAAIQgAABCEAAAIQgAgBAE
                        AEAIAgAgBAEAEIIAAAhBAACEIACAEAQAQAgCACAEAQAQggAACEEAAIQgAABCEAAAIQgAgBAEAEAI
                        AgAgBAEAEIIAAAhBAACEIAAAQhAAACEIAIAQBABACAIAIAQBABCCAAAIQQAAhCAAAEIQAAAhCAAg
                        BAEAEIIAAAhBAACEIAAAQhAAACEIAIAQBABACAIAIAQBABCCAAAIQQAAhCAAAEIQAAAhCACAEAQA
                        QAgCACAEAQAQggAACEEAAIQgAABCEAAAIQgAgBAEABCCAAAIQQAAhCAAAEIQAAAhCACAEAQAQAgC
                        ACAEAQAQggAACEEAAIQgAABCEAAAIQgAgBAEAEAIAgAgBAEAEIIAAAhBAACEIAAAQhAAACEIAIAQ
                        BABACAIACEGHAABACAIAIAQBABCCAAAIQQAAhCAAAEIQAAAhCACAEAQAQAgCACAEAQAQggAACEEA
                        AIQgAABCEAAAIQgAgBAEAEAIAgAgBAEAEIIAAAhBAACEIAAAQhAAACEIACAEAQAQggAACEEAAIQg
                        AABCEAAAIQgAgBAEAEAIAgAgBAEAEIIAAAhBAACEIAAAQhAAACEIAIAQBABACAIAIAQBABCCAAAI
                        QQAAhCAAAEIQAAAhCACAEAQAEIIAAAhBAACEIAAAQhAAACEIAIAQBABACAIAIAQBABCCAAAIQQAA
                        hCAAAEIQAAAhCACAEAQAQAgCACAEAQAQggAACEEAAIQgAABCEAAAIQgAgBAEAEAIAgAgBAEAhCAA
                        AEIQAAAhCACAEAQAQAgCACAEAQAQggAACEEAAIQgAABCEAAAIQgAgBAEAEAIAgAgBAEAEIIAAAhB
                        AACEIAAAQhAAACEIAIAQBABACAIAIAQBABCCAABCEAAAIQgAgBAEAEAIAgAgBAEAEIIAAAhBAACE
                        IAAAQhAAACEIAIAQBABACAIAIAQBABCCAAAIQQAAhCAAAEIQAAAhCACAEAQAQAgCACAEAQAQggAA
                        CEEAAIQgAIAQBABACAIAIAQBABCCAAAIQQAAhCAAAEIQAAAhCACAEAQAQAgCACAEAQAQggAACEEA
                        AIQgAABCEAAAIQgAgBAEAEAIAgAgBAEAEIIAAAhBAACEIAAAQhAAQAgCACAEAQAQggAACEEAAIQg
                        AABCEAAAIQgAgBAEAEAIAgAgBAEAEIIAAAhBAACEIAAAQhAAACEIAIAQBABACAIAIAQBABCCAAAI
                        QQAAhCAAAEIQAAAhCACAEAQAEIIAAAhBAACEIAAAQhAAACEIAIAQBABACAIAIAQBABCCAAAIQQAA
                        hCAAAEIQAAAhCACAEAQAQAgCACAEAQAQggAACEEAAIQgAABCEAAAIQgAgBAEAEAIAgAIQQAAhCAA
                        AEIQAAAhCACAEAQAQAgCACAEAQAQggAACEEAAIQgAABCEAAAIQgAgBAEAEAIAgAgBAEAEIIAAAhB
                        AACEIAAAQhAAACEIAIAQBABACAIAIAQBABCCAABCEAAAIQgAgBAEAEAIAgAgBAEAEIIAAAhBAACE
                        IAAAQhAAACEIAIAQBABACAIAIAQBABCCAAAIQQAAhCAAAEIQAAAhCACAEAQAQAgCACAEAQAQggAA
                        CEEAACEIAIAQBABACAIAIAQBABCCAAAIQQAAhCAAAEIQAAAhCACAEAQAQAgCACAEAQAQggAACEEA
                        AIQgAABCEAAAIQgAgBAEAEAIAgAgBAEAEIIAAAhBAACEIACAEHQIAACEIAAAQhAAACEIAIAQBABA
                        CAIAIAQBABCCAAAIQQAAhCAAAEIQAAAhCACAEAQAQAgCACAEAQAQggAACEEAAIQgAABCEAAAIQgA
                        gBAEAEAIAgAgBAEAEIIAAEIQAAAhCACAEAQAQAgCACAEAQAQggAACEEAAIQgAABCEAAAIQgAgBAE
                        AEAIAgAgBAEAEIIAAAhBAACEIAAAQhAAACEIAIAQBABACAIAIAQBABCCAAAIQQAAIQgAgBAEAEAI
                        AgAgBAEAEIIAAAhBAACEIAAAQhAAACEIAIAQBABACAIAIAQBABCCAAAIQQAAhCAAAEIQAAAhCACA
                        EAQAQAgCACAEAQAQggAACEEAAIQgAABCEABACAIAIAQBABCCAAAIQQAAhCAAAEIQAAAhCACAEAQA
                        QAgCACAEAQAQggAACEEAAIQgAABCEAAAIQgAgBAEAEAIAgAgBAEAEIIAAAhBAACEIAAAQhAAACEI
                        ACAEAQAQggAACEEAAIQgAABCEAAAIQgAgBAEAEAIAgAgBAEAEIIAAAhBAACEIAAAQvCL1T8NAPAL
                        vVTjzC9+oAQhACAC3zAEAQAQggAACEEAAH5FCK7ZVwCAd/KtLTS/6MF4xuvFJwCwtw+e2SxvE4I/
                        /oACAG8VjT+6P+YfcpDFIQDwU3vk14fgeqCU18rX1vPWzu9Yg+8vFAGAXj/02mENPD/aJk8N1PmJ
                        B3Y9IQ73RpzgAwC+IySP9EsaaKeXC8F1IMj2ht4afC+RCAAc7YGjjbEG32tNT1pNPD/wYD3yH2rv
                        QVsb/zCCEADeMwDXgeDrTeue2RR73nvod19fsMRb/xiRufv8tdPOAz75fwMAfm38nfGavEVG1yh8
                        +yDU9Zv/EXpxFx3hq/2jTIW4yx+fTvyPBAD4HYFYGnDaOzXceq9U+NnTzA86iOvOoq4dmNpBHP2H
                        qlW5qWEAeN/4O7LSt9cpI60TjczTuuX6xIO7DpRx7/lr8LWjI4JiEADeOwpTp1XWQAS2eqW3BV7v
                        d55qfuGDXYvJNHDQjQgCAL0eiY4IRoMvpf75g+tA6zzM9QEHsvfh10Blt25L8HlpMPAmMQgAbxmC
                        tcfWRqgd6ZRaIKZOv5w+cHU94eD1Vu1GKjcagEt2kJfs59Mm6P7v+3nztbeCeHSFMQDwfhG4BGJv
                        SWODV61W6gXjt4VgK5x6i0Wi0bcUDngpBrext1RicMo+t3MEAYBSA4zMVi6DgRh53sjC20OnuF0f
                        eCDXk29LIwKX9PeI4PL5Gebs8akQgb1tZACA9wrAlL5O49baY/R2RhOldNII4XXwQE07D/Do6F9+
                        uzUenzf3S58vj8A8+gQgANBbxFoKwVunU0oRuDcSH+JRi0Wio4JLJwxvhYN8yyLwtom8W+EzzTsi
                        UBwCwHtEXzQG81HBW+draTDrFojE3vmCKY1tbL0+KwRT48P1pnl7B6sWgdvImyoRuA6GoAgEADFY
                        6pdSBNYGrW6F72sxGFlYknZEYNejVg1HzvOLRGDpIH5UInCqROCSxqeGxSAAvF8IRkYEl0LsfXze
                        boWvt04YlgbHRqaIH75YZE31lbVT54PUpoFr5wDmB3V7//r59bJ5LA+8dROBtVhsRaAABID3DsLe
                        jOaadctHoV0+CoFYC8LWDimjK4uHzyu8PvCgji4MqQVgHoEfqT4KeP8dl00ElqaPJyEIAKT+Vchq
                        28TcI+7eLX8+7//Z9Et+yztnqQRiZMr46N95Wgju3Qbm1riVYvCS+ucE5ptI5zFYi0ABCABisHS/
                        NaCVt8o2Bv90IrAUfr2RwVao7nLGOYJTMBBbo4C1GLwH4J9OBN5HAe+32+fX0ohgLQDFIACIwFQI
                        rNLpba0Rwd7oYK19ItvJlGIwpSdtKF0Lv9Fdt1s1/ZGV9SX1F4ZcPv+WZROBt/T3iGASggDAjhCs
                        tUxpRPB++y/7vjdlvDcKo3/bKSHYi8ORCMxH/66FCGxtEXN//9vna+9f59Q/R1AEAgDRGGytHN5O
                        +95jrxSBtZHC1hTx3kUjYdcTDtqUxq8eUlslfOlEYB6CSxaBt00ElkIwJecIAgCxGIxcWSSf1cxH
                        Bf8LxGA0Cpd08lVGrgMHZ6p8X/pZNAbzCLwEIjDf0LEUgb3zA60aBgBSiq8arp0jWDq9LQ/BUhD2
                        VhTfUnxUMKX+tjKHQrAVha0ALC2BvqX6SOAlxaaD7+/zT/p7ark3LWx6GAAYicHIpXCjo4K10cEz
                        InCX64kHsDcq2FotHLlaSNq8zz/p79HAa/Yec4rtI1gKQEEIACJw5FrDpXMF80UjpRisLRiJnC+Y
                        OhF4+obSayXM7vE0uon0NgCn1B65S+nrcGxrNDCPwNKq4T0BKBIB4GeHXuR5pRisnSMYPVcwspJ4
                        z+bShxxdLDI1qrk1GjgFbpEIvKa/9w/sjQimdGyxiBAEgN8dgSMhWNpPMBKD/6Wvi0ZKVx0pReCS
                        2ucGriPH4HrgwPbOE1yysMsD8OhI4D0Cr5UIHAlBkQcAYrEWgdHp4dbCkdK0cG1EMLKNTCvywiOF
                        15MP4FQ5YPcQ640I1sKyFIGl0cDoQpHeaKAoBID3ib/8sd5l5kqXzM1HBUtXGxm96kg0BndPEx+9
                        skjt+zwC719vqTw6WBsJLK00vhZCsHV+YGTFsPgDAFFYC8LehTJal8r9KMRfb0Swtmp4Se1rDA9N
                        C+8JwVoU5otG0mAM1t5/bRzcayUCWyE4GoDiEAB+d/j1IqrUNb1FI/kq4lIU5t/vXTUc/ftOD8FW
                        EJbqOaW/zxeshVb+umuqX44uem5g7/xA0QcAwjBVeqYXgpGRwVIUlqaFl1RfMBJdIPLQEKxdVaR3
                        rmBtAUkrBC+fr7lsDsp28+nWSGBvkYjtYgBA+PWe0wrB2hRxaX/B2ihhazPpW4pvGbPu+DsfuqF0
                        Sn+PBkbiqjQauGyi75Zi5wVGRgNFHgAwGoL5Fi6lKeLa6OCtEX+18wMfeoWRM7aPqY0K1oIwcnm6
                        7UEtrQyO7Bm4Z7UwAEAvBKMXzmgFYSn+boWgjF5TOHK1kdNCsBeH+QdZPiOtNELYqu37wchHAKOL
                        Q6LnBwpDABB+rT5JjRBcAzFYmzoujSSOLBI5dHWRM1cNT4GDuTR+dj8n8H5/3gTkPQZvaXxxiL0D
                        AYDREBwZFWyNDNYC79YIv9begaeNBh4NwVYclj7Esom71sGcN1+3oTcSgaUQbMWeCAQAMXgkBkvn
                        9I3G4ch5gcPR94gQLI0KRmMwX1xSCsLSIpDodPDIeYFCEABE4JEQ7E0Xt8KwFJDRUcDdo4FnhGAt
                        DFtTxcsm4pZN9KXCQSwFXzQCSwFo82gAIBKBkRBMgRDsjRauwQA8JfweEYJral8dpDU6OGXBOG/+
                        2CmLxqkQg61RQCEIADwiBFOKTxXX7kfjb2387ujf8dAQzGMwMkVci8L8tVMWhJERwD3bxYhAABCE
                        e4Mwels637e2iGnF4FOvLDIShqVrEOfPKd3WweiLbBotBAGAs0Iwpdhl33rh15ty7kXgIWcH0NT4
                        vjZiV4q6qfOzdEIAij8AYCQMIyODKcXOI2y9Lr/fisBDUfiIGIrGYErtkb2p8bxaCPZ+vxAEAPaG
                        YCQGI3HXe34t/E6NwEfGUGvD5sgoYeux1tfe7wYAOCMKo1u5jE73RkYBT4nARwdSL8iiI4VHAnD0
                        bxSMACDyjgZhJPSiI38Pi8Bnhc+RIByJP1PAAMCzozEagnt//pAAfHYkRSLtyH0hCAB8dwj2Ym4d
                        vP/QCPyOSBoNwmjwiUAA4FViMBKC3xqA3x1K0XB7RvSJRQDgSHSNRNx64LW/JgQjv3/P6l9RBwC8
                        UkCuJzz/14bgmZEnAgGAVwvBaNyt3/HBXzWeph/82QEAYXjm894uBM/4jEIRAPjO0HvJ+PvpsSTw
                        AIB3iEZRJRABALEHAAAAAAAAAAAAAAAAAABQ8r8CDADNwcxIyC82sgAAAABJRU5ErkJggg=="
                    transform="matrix(0.48 0 0 0.48 232.88 36.84)">
                    </image>
                    <g class="st20">
                    <linearGradient id="SVGID_12_" gradientUnits="userSpaceOnUse" x1="376.764" y1="60.3776" x2="384.0449"
                        y2="598.3551">
                        <stop offset="0" style="stop-color:#1F72AA" />
                        <stop offset="2.110190e-02" style="stop-color:#2577AF" />
                        <stop offset="0.1415" style="stop-color:#418EC7" />
                        <stop offset="0.2618" style="stop-color:#569FD9" />
                        <stop offset="0.3811" style="stop-color:#62A9E3" />
                        <stop offset="0.4979" style="stop-color:#66ACE7" />
                        <stop offset="1" style="stop-color:#345184" />
                    </linearGradient>
                    <path class="st21" d="M510.7,443.9H247.8c-3.6,0-6.5-2.9-6.5-6.5V51.6c0-3.6,2.9-6.5,6.5-6.5h262.9c3.6,0,6.5,2.9,6.5,6.5v385.8
                            C517.2,441,514.3,443.9,510.7,443.9z" />
                    </g>
                </g>
                <g>
                <g class="test">
                <g class="st15">
                    <path class="st8" d="M336,142.2c2.6,0.1,4.8-1.8,7.1-3.2c2.2-1.4,5.3-2.3,7.3-0.6c0.4,0.4,0.9,0.9,1.4,0.7
                        c0.3-0.1,0.4-0.4,0.6-0.6c1.3-2.1,2.9-4,4.7-5.7c1.4-1.3,3.2-2.5,5.1-2.3c2.4,0.3,3.9,2.8,4.4,5.2c0.1,0.6,0.2,1.2,0.6,1.6
                        c0.6,0.7,1.7,0.6,2.6,0.5c2.2-0.2,4.5-0.2,6.7,0.4c2.2,0.6,4.2,1.8,5.4,3.7" />
                </g>
                </g>
                <g class="test">
                <g class="st15">
                    <path class="st8" d="M255.3,125.7c1.5-1.8,4-2.5,6.4-2.4c2.4,0,4.7,0.7,7,0.9c2.3,0.2,4.9,0,6.7-1.5c1.5-1.2,2.4-3,4-3.9
                        c2.5-1.4,5.7-0.2,8.3,1c0.9-2.6,2.9-5,5.6-5.7c2.7-0.6,6,1.2,6.2,3.9c0.1,1-0.2,2.1,0.5,2.8c0.4,0.5,1.2,0.7,1.8,0.7
                        c2.2,0.2,4.4,0.1,6.5,0.4s4.3,1.5,5.2,3.5" />
                </g>
                </g>
                <g class="test">
                <g class="st15">
                    <path class="st8" d="M346.1,90c5.6-1.1,10.1-6.1,15.8-6c2.1,0.1,4.2,0.9,5.8,2.3c0.3,0.3,0.7,0.6,1.1,0.5
                        c0.4-0.1,0.6-0.5,0.8-0.8c1.3-2.3,3.4-3.9,5.6-5.3c2.3-1.5,4.6-2.9,7.3-3.5s5.5-0.5,7.9,0.9c2.3,1.4,3.9,4.2,3.3,6.8
                        c1.7-1.2,3.4-2.4,5.5-2.7c2-0.4,4.4,0.3,5.4,2.1c0.3,0.6,0.6,1.4,1.3,1.5c0.3,0,0.6-0.1,0.9-0.2c2.2-1,4.9-1.1,7.2-0.4
                    c3.5,1.1,6.4,4
                    </g>.2,10.1,4.6" />
                </g>
                </g>
                <g>
                    <g>
                        <path class="st9" d="M512.7,101.7C512.7,101.7,512.7,101.7,512.7,101.7C512.7,101.7,512.7,101.7,512.7,101.7
                            C512.8,101.7,512.7,101.7,512.7,101.7C512.8,101.7,512.8,101.7,512.7,101.7C512.8,101.7,512.8,101.7,512.7,101.7
                            C512.8,101.7,512.8,101.7,512.7,101.7C512.8,101.7,512.8,101.7,512.7,101.7C512.8,101.7,512.8,101.7,512.7,101.7
                            C512.8,101.7,512.8,101.7,512.7,101.7C512.8,101.7,512.8,101.7,512.7,101.7C512.8,101.7,512.8,101.7,512.7,101.7
                            c0.1,0,0.1,0,0.1,0C512.8,101.7,512.8,101.7,512.7,101.7c0.1,0,0.1,0,0.1,0.1C512.8,101.7,512.8,101.7,512.7,101.7
                            C512.8,101.7,512.8,101.7,512.7,101.7C512.8,101.7,512.8,101.7,512.7,101.7C512.8,101.7,512.8,101.7,512.7,101.7
                            c0.1,0,0.1,0,0.1,0C512.8,101.7,512.8,101.7,512.7,101.7c0.1,0,0.1,0,0.1,0C512.8,101.7,512.8,101.7,512.7,101.7
                            C512.8,101.7,512.8,101.7,512.7,101.7C512.8,101.7,512.8,101.7,512.7,101.7C512.8,101.7,512.8,101.7,512.7,101.7
                            C512.8,101.7,512.8,101.7,512.7,101.7C512.8,101.7,512.8,101.7,512.7,101.7C512.8,101.7,512.8,101.7,512.7,101.7
                            C512.8,101.7,512.8,101.7,512.7,101.7C512.8,101.7,512.8,101.7,512.7,101.7C512.7,101.7,512.8,101.7,512.7,101.7
                            C512.7,101.7,512.7,101.7,512.7,101.7C512.7,101.7,512.7,101.7,512.7,101.7C512.8,101.7,512.8,101.7,512.7,101.7
                            c0.1,0,0.1,0,0.1,0c0,0,0,0,0.1,0c0,0,0,0,0,0c0,0,0-0.1,0-0.1c0,0,0-0.1-0.1-0.1c-0.1,0-0.2-0.1-0.2,0c-0.1,0-0.1,0.1-0.1,0.2
                            c0,0,0,0.1,0,0.1c0,0,0,0.1,0,0.1c0,0,0,0.1,0,0.1c0,0,0,0,0,0.1c0,0,0,0,0.1,0c0,0,0,0,0.1,0c0,0,0,0,0,0c0,0,0,0,0,0
                            c0,0,0,0,0.1,0c0,0,0.1-0.1,0.1-0.1c0,0,0,0,0-0.1c0,0,0,0,0-0.1c0,0-0.1-0.1-0.1-0.1C512.8,101.7,512.8,101.7,512.7,101.7
                            L512.7,101.7z" />
                    </g>
                </g>
                <radialGradient id="SVGID_13_" cx="464.809" cy="130.6417" r="31.6404" gradientUnits="userSpaceOnUse">
                <stop offset="0.1089" style="stop-color:#FAFBFC" />
                <stop offset="1" style="stop-color:#66ACE7;stop-opacity:0" />
                </radialGradient>
                <circle class="st22" cx="464.8" cy="130.6" r="31.6" />
                <g>
                <linearGradient id="SVGID_14_" gradientUnits="userSpaceOnUse" x1="430.0132" y1="119.6493" x2="397.4059"
                    y2="153.5077">
                    <stop offset="7.292849e-03" style="stop-color:#FFFFFF;stop-opacity:0" />
                    <stop offset="1" style="stop-color:#FFFFFF" />
                </linearGradient>
                <path class="st23" d="M431.9,116.4L415.7,132c-1.1,1.1-2.5,2.6-2.4,4.1c0.1,1.6,2,1.4,4.1-0.8
                    C421.7,130.7,431.9,116.4,431.9,116.4z" />
                <linearGradient id="SVGID_15_" gradientUnits="userSpaceOnUse" x1="299.1879" y1="161.8487" x2="266.5806"
                    y2="195.7071">
                    <stop offset="7.292849e-03" style="stop-color:#FFFFFF;stop-opacity:0" />
                    <stop offset="1" style="stop-color:#FFFFFF" />
                </linearGradient>
                <path class="st24" d="M301.1,158.6l-16.3,15.6c-1.1,1.1-2.5,2.6-2.4,4.1c0.1,1.6,2,1.4,4.1-0.8
                    C290.9,172.9,301.1,158.6,301.1,158.6z" />
                <linearGradient id="SVGID_16_" gradientUnits="userSpaceOnUse" x1="334.5739" y1="97.0054" x2="319.0657"
                    y2="113.1087">
                    <stop offset="7.292849e-03" style="stop-color:#FFFFFF;stop-opacity:0" />
                    <stop offset="1" style="stop-color:#FFFFFF" />
                </linearGradient>
                <path class="st25"
                    d="M335.5,95.5l-7.7,7.4c-0.5,0.5-1.2,1.2-1.1,2c0.1,0.7,1,0.7,1.9-0.4C330.6,102.2,335.5,95.5,335.5,95.5z" />
                </g>
                <g class="st19">
                <g class="st20">
                    <g>
                    <path class="st9" d="M284.2,90.3C284.2,90.3,284.2,90.3,284.2,90.3C284.2,90.2,284.2,90.2,284.2,90.3
                            C284.2,90.2,284.1,90.2,284.2,90.3C284.1,90.3,284.2,90.3,284.2,90.3L284.2,90.3z" />
                    </g>
                </g>
                <g class="st20">
                    <g>
                    <path class="st9" d="M268.9,70.3c0,0,0.1,0,0.1,0c0,0,0,0,0,0c0,0,0,0,0-0.1c0,0,0-0.1,0-0.1c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0
                            c0,0,0,0,0,0c0,0,0,0,0,0.1c0,0,0,0.1,0,0.1C268.8,70.2,268.8,70.3,268.9,70.3L268.9,70.3z" />
                    </g>
                </g>
                <g class="st20">
                    <g>
                    <path class="st9" d="M472.5,97.4C472.5,97.4,472.5,97.4,472.5,97.4c0.1,0,0.2,0,0.2-0.1c0,0,0,0,0.1-0.1c0,0,0-0.1,0-0.1
                            c0,0,0,0,0-0.1c0,0,0-0.1-0.1-0.1c0,0,0,0-0.1,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0.1c0,0,0,0-0.1,0.1
                            c0,0,0,0.1,0,0.1c0,0,0,0,0,0.1c0,0,0,0.1,0.1,0.1c0,0,0,0,0.1,0C472.4,97.4,472.4,97.4,472.5,97.4L472.5,97.4z" />
                    </g>
                </g>
                <g class="st20">
                    <g>
                    <path class="st9" d="M424.9,70.1C425,70.1,425,70.1,424.9,70.1c0.1,0,0.2,0,0.2-0.1c0,0,0,0,0.1-0.1c0,0,0-0.1,0-0.1
                            c0,0,0,0,0-0.1c0,0,0-0.1-0.1-0.1c0,0,0,0-0.1,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0.1c0,0,0,0-0.1,0.1
                            c0,0,0,0.1,0,0.1c0,0,0,0,0,0.1c0,0,0,0.1,0.1,0.1c0,0,0,0,0.1,0C424.9,70.1,424.9,70.1,424.9,70.1L424.9,70.1z" />
                    </g>
                </g>
                <g class="st20">
                    <g>
                    <path class="st9" d="M346.3,65.2C346.3,65.2,346.3,65.2,346.3,65.2c0.1,0,0.2,0,0.2-0.1c0,0,0,0,0.1-0.1c0,0,0-0.1,0-0.1
                            c0,0,0,0,0-0.1c0,0,0-0.1-0.1-0.1c0,0,0,0-0.1,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0.1c0,0,0,0-0.1,0.1
                            c0,0,0,0.1,0,0.1c0,0,0,0,0,0.1c0,0,0,0.1,0.1,0.1c0,0,0,0,0.1,0C346.2,65.2,346.2,65.2,346.3,65.2L346.3,65.2z" />
                    </g>
                </g>
                <g class="st20">
                    <g>
                    <path class="st9"
                        d="M328.7,119.2C328.7,119.2,328.7,119.2,328.7,119.2c0.1,0,0.2,0,0.2-0.1c0,0,0,0,0.1-0.1c0,0,0-0.1,0-0.1
                            c0,0,0,0,0-0.1c0,0,0-0.1-0.1-0.1c0,0,0,0-0.1,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0.1c0,0,0,0-0.1,0.1
                            c0,0,0,0.1,0,0.1c0,0,0,0,0,0.1c0,0,0,0.1,0.1,0.1c0,0,0,0,0.1,0C328.6,119.2,328.6,119.2,328.7,119.2L328.7,119.2z" />
                    </g>
                </g>
                <g class="st20">
                    <g>
                    <path class="st9" d="M382,93.5C382,93.5,382.1,93.5,382,93.5c0.1,0,0.2,0,0.2-0.1c0,0,0,0,0.1-0.1c0,0,0-0.1,0-0.1
                            c0,0,0,0,0-0.1c0,0,0-0.1-0.1-0.1c0,0,0,0-0.1,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0.1c0,0,0,0-0.1,0.1
                            c0,0,0,0.1,0,0.1c0,0,0,0,0,0.1c0,0,0,0.1,0.1,0.1c0,0,0,0,0.1,0C381.9,93.5,381.9,93.5,382,93.5L382,93.5z" />
                    </g>
                </g>
                <g class="st20">
                    <g>
                    <path class="st9" d="M431.1,106.5C431.1,106.5,431.2,106.4,431.1,106.5c0.1,0,0.2,0,0.2-0.1c0,0,0,0,0.1-0.1c0,0,0-0.1,0-0.1
                            c0,0,0,0,0-0.1c0,0,0-0.1-0.1-0.1c0,0,0,0-0.1,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0.1c0,0,0,0-0.1,0.1
                            c0,0,0,0.1,0,0.1c0,0,0,0,0,0.1c0,0,0,0.1,0.1,0.1c0,0,0,0,0.1,0C431,106.4,431.1,106.5,431.1,106.5L431.1,106.5z" />
                    </g>
                </g>
                <g class="st20">
                    <g>
                    <path class="st9"
                        d="M292.9,137.5C293,137.5,293,137.4,292.9,137.5c0.1,0,0.2,0,0.2-0.1c0,0,0,0,0.1-0.1c0,0,0-0.1,0-0.1
                            c0,0,0,0,0-0.1c0,0,0-0.1-0.1-0.1c0,0,0,0-0.1,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0.1c0,0,0,0-0.1,0.1
                            c0,0,0,0.1,0,0.1c0,0,0,0,0,0.1c0,0,0,0.1,0.1,0.1c0,0,0,0,0.1,0C292.9,137.4,292.9,137.5,292.9,137.5L292.9,137.5z" />
                    </g>
                </g>
                <g class="st20">
                    <g>
                    <path class="st9" d="M377.9,67.6c0,0,0.1,0,0.1,0c0,0,0.1,0,0.1-0.1c0,0,0-0.1,0.1-0.1c0,0,0-0.1,0-0.1c0,0,0-0.1,0-0.1
                            c0-0.1,0-0.1-0.1-0.1c0,0,0,0-0.1,0c0,0-0.1,0-0.2,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0.1c0,0,0,0.1-0.1,0.1c0,0,0,0.1,0,0.1
                            c0,0,0,0.1,0,0.1c0,0.1,0,0.1,0.1,0.1c0,0,0,0,0.1,0C377.8,67.6,377.8,67.6,377.9,67.6L377.9,67.6z" />
                    </g>
                </g>
                <g class="st20">
                    <g>
                    <path class="st9" d="M473.6,65.8c0,0,0.1,0,0.1,0c0,0,0.1,0,0.1-0.1c0,0,0-0.1,0.1-0.1c0,0,0-0.1,0-0.1c0,0,0-0.1,0-0.1
                            c0-0.1,0-0.1-0.1-0.1c0,0,0,0-0.1,0c0,0-0.1,0-0.2,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0.1c0,0,0,0.1-0.1,0.1c0,0,0,0.1,0,0.1
                            c0,0,0,0.1,0,0.1c0,0.1,0,0.1,0.1,0.1c0,0,0,0,0.1,0C473.5,65.8,473.5,65.8,473.6,65.8L473.6,65.8z" />
                    </g>
                </g>
                <g class="st20">
                    <g>
                    <path class="st9"
                        d="M482.8,122.3c0.1,0,0.1,0,0.2,0c0,0,0.1,0,0.1-0.1c0,0,0.1-0.1,0.1-0.1c0,0,0-0.1,0-0.2c0,0,0-0.1,0-0.1
                            c0-0.1-0.1-0.1-0.1-0.2c0,0-0.1,0-0.1-0.1c-0.1,0-0.1-0.1-0.2-0.1c-0.1,0-0.1,0-0.2,0c0,0-0.1,0-0.1,0.1c0,0-0.1,0.1-0.1,0.1
                            c0,0,0,0.1,0,0.2c0,0,0,0.1,0,0.1c0,0.1,0.1,0.1,0.1,0.2c0,0,0.1,0,0.1,0.1C482.7,122.2,482.7,122.3,482.8,122.3L482.8,122.3z" />
                    </g>
                </g>
                <g class="st20">
                    <g>
                    <path class="st9"
                        d="M308.2,81.4c0.1,0,0.1,0,0.2,0c0,0,0.1,0,0.1-0.1c0,0,0.1-0.1,0.1-0.1c0,0,0-0.1,0-0.2c0,0,0-0.1,0-0.1
                            c0-0.1-0.1-0.1-0.1-0.2c0,0-0.1,0-0.1-0.1c-0.1,0-0.1-0.1-0.2-0.1c-0.1,0-0.1,0-0.2,0c0,0-0.1,0-0.1,0.1c0,0-0.1,0.1-0.1,0.1
                            c0,0,0,0.1,0,0.2c0,0,0,0.1,0,0.1c0,0.1,0.1,0.1,0.1,0.2c0,0,0.1,0,0.1,0.1C308,81.4,308.1,81.4,308.2,81.4L308.2,81.4z" />
                    </g>
                </g>
                <g class="st20">
                    <g>
                    <path class="st9"
                        d="M406.7,102.3c0.1,0,0.1,0,0.2,0c0,0,0.1,0,0.1-0.1c0,0,0.1-0.1,0.1-0.1c0,0,0-0.1,0-0.2c0,0,0-0.1,0-0.1
                            c0-0.1-0.1-0.1-0.1-0.2c0,0-0.1,0-0.1-0.1c-0.1,0-0.1-0.1-0.2-0.1c-0.1,0-0.1,0-0.2,0c0,0-0.1,0-0.1,0.1c0,0-0.1,0.1-0.1,0.1
                            c0,0,0,0.1,0,0.2c0,0,0,0.1,0,0.1c0,0.1,0.1,0.1,0.1,0.2c0,0,0.1,0,0.1,0.1C406.6,102.3,406.7,102.3,406.7,102.3L406.7,102.3z" />
                    </g>
                </g>
                <g class="st20">
                    <g>
                    <path class="st9"
                        d="M446.1,56.1c0.1,0,0.1,0,0.2,0c0,0,0.1,0,0.1-0.1c0,0,0.1-0.1,0.1-0.1c0,0,0-0.1,0-0.2c0,0,0-0.1,0-0.1
                            c0-0.1-0.1-0.1-0.1-0.2c0,0-0.1,0-0.1-0.1c-0.1,0-0.1-0.1-0.2-0.1c-0.1,0-0.1,0-0.2,0c0,0-0.1,0-0.1,0.1c0,0-0.1,0.1-0.1,0.1
                            c0,0,0,0.1,0,0.2c0,0,0,0.1,0,0.1c0,0.1,0.1,0.1,0.1,0.2c0,0,0.1,0,0.1,0.1C446,56.1,446.1,56.1,446.1,56.1L446.1,56.1z" />
                    </g>
                </g>
                <g class="st20">
                    <g>
                    <path class="st9"
                        d="M264.4,102.8c0.1,0,0.1,0,0.2,0c0,0,0.1,0,0.1-0.1c0,0,0.1-0.1,0.1-0.1c0,0,0-0.1,0-0.2c0,0,0-0.1,0-0.1
                            c0-0.1-0.1-0.1-0.1-0.2c0,0-0.1,0-0.1-0.1c-0.1,0-0.1-0.1-0.2-0.1c-0.1,0-0.1,0-0.2,0c0,0-0.1,0-0.1,0.1c0,0-0.1,0.1-0.1,0.1
                            c0,0,0,0.1,0,0.2c0,0,0,0.1,0,0.1c0,0.1,0.1,0.1,0.1,0.2c0,0,0.1,0,0.1,0.1C264.3,102.8,264.3,102.8,264.4,102.8L264.4,102.8z" />
                    </g>
                </g>
                <g class="st20">
                    <g>
                    <path class="st9"
                        d="M291.7,63.4c0.1,0,0.1,0,0.2,0c0,0,0.1,0,0.1-0.1c0,0,0.1-0.1,0.1-0.1c0,0,0-0.1,0-0.2c0,0,0-0.1,0-0.1
                            c0-0.1-0.1-0.1-0.1-0.2c0,0-0.1,0-0.1-0.1c-0.1,0-0.1-0.1-0.2-0.1c-0.1,0-0.1,0-0.2,0c0,0-0.1,0-0.1,0.1c0,0-0.1,0.1-0.1,0.1
                            c0,0,0,0.1,0,0.2c0,0,0,0.1,0,0.1c0,0.1,0.1,0.1,0.1,0.2c0,0,0.1,0,0.1,0.1C291.6,63.4,291.7,63.4,291.7,63.4L291.7,63.4z" />
                    </g>
                </g>
                <g class="st20">
                    <g>
                    <path class="st9"
                        d="M385,117.7c0.1,0,0.1,0,0.2,0c0,0,0.1,0,0.1-0.1c0,0,0.1-0.1,0.1-0.1c0,0,0-0.1,0-0.2c0,0,0-0.1,0-0.1
                            c0-0.1-0.1-0.1-0.1-0.2c0,0-0.1,0-0.1-0.1c-0.1,0-0.1-0.1-0.2-0.1c-0.1,0-0.1,0-0.2,0c0,0-0.1,0-0.1,0.1c0,0-0.1,0.1-0.1,0.1
                            c0,0,0,0.1,0,0.2c0,0,0,0.1,0,0.1c0,0.1,0.1,0.1,0.1,0.2c0,0,0.1,0,0.1,0.1C384.9,117.7,385,117.7,385,117.7L385,117.7z" />
                    </g>
                </g>
                <g class="st20">
                    <g>
                    <path class="st9"
                        d="M480.7,153.5c0.1,0,0.1,0,0.2,0c0,0,0.1,0,0.1-0.1c0,0,0.1-0.1,0.1-0.1c0,0,0-0.1,0-0.2c0,0,0-0.1,0-0.1
                            c0-0.1-0.1-0.1-0.1-0.2c0,0-0.1,0-0.1-0.1c-0.1,0-0.1-0.1-0.2-0.1c-0.1,0-0.1,0-0.2,0c0,0-0.1,0-0.1,0.1c0,0-0.1,0.1-0.1,0.1
                            c0,0,0,0.1,0,0.2c0,0,0,0.1,0,0.1c0,0.1,0.1,0.1,0.1,0.2c0,0,0.1,0,0.1,0.1C480.6,153.5,480.6,153.5,480.7,153.5L480.7,153.5z" />
                    </g>
                </g>
                <g class="st20">
                    <g>
                    <path class="st9"
                        d="M270.8,153.9c0.1,0,0.1,0,0.2,0c0,0,0.1,0,0.1-0.1c0,0,0.1-0.1,0.1-0.1c0,0,0-0.1,0-0.2c0,0,0-0.1,0-0.1
                            c0-0.1-0.1-0.1-0.1-0.2c0,0-0.1,0-0.1-0.1c-0.1,0-0.1-0.1-0.2-0.1c-0.1,0-0.1,0-0.2,0c0,0-0.1,0-0.1,0.1c0,0-0.1,0.1-0.1,0.1
                            c0,0,0,0.1,0,0.2c0,0,0,0.1,0,0.1c0,0.1,0.1,0.1,0.1,0.2c0,0,0.1,0,0.1,0.1C270.7,153.9,270.8,153.9,270.8,153.9L270.8,153.9z" />
                    </g>
                </g>
                <circle class="st26" cx="464.8" cy="130.6" r="13.1" />
                <g class="st20">
                    <g>
                    <path class="st9" d="M257.5,90.4C257.5,90.4,257.5,90.4,257.5,90.4C257.5,90.4,257.5,90.4,257.5,90.4
                            C257.5,90.4,257.5,90.4,257.5,90.4C257.5,90.4,257.5,90.4,257.5,90.4C257.5,90.4,257.5,90.4,257.5,90.4
                            C257.5,90.4,257.5,90.4,257.5,90.4C257.5,90.4,257.5,90.4,257.5,90.4C257.5,90.4,257.5,90.4,257.5,90.4
                            C257.5,90.4,257.5,90.4,257.5,90.4C257.5,90.4,257.6,90.4,257.5,90.4C257.6,90.4,257.6,90.4,257.5,90.4c0.1,0,0.1,0,0.1,0
                            C257.6,90.4,257.6,90.4,257.5,90.4c0.1,0,0.1,0,0.1,0.1C257.6,90.4,257.6,90.4,257.5,90.4C257.6,90.4,257.6,90.4,257.5,90.4
                            C257.6,90.4,257.6,90.3,257.5,90.4C257.6,90.3,257.6,90.3,257.5,90.4c0.1,0,0.1,0,0.1,0C257.6,90.3,257.6,90.3,257.5,90.4
                            c0.1,0,0.1,0,0.1,0C257.6,90.3,257.6,90.3,257.5,90.4C257.6,90.3,257.6,90.3,257.5,90.4C257.6,90.3,257.5,90.3,257.5,90.4
                            C257.5,90.4,257.5,90.3,257.5,90.4C257.5,90.4,257.5,90.4,257.5,90.4C257.5,90.4,257.5,90.4,257.5,90.4
                            C257.5,90.4,257.5,90.4,257.5,90.4C257.5,90.4,257.5,90.4,257.5,90.4C257.5,90.4,257.5,90.4,257.5,90.4
                            C257.5,90.4,257.5,90.4,257.5,90.4C257.5,90.4,257.5,90.4,257.5,90.4C257.5,90.4,257.5,90.4,257.5,90.4
                            C257.5,90.4,257.5,90.4,257.5,90.4c0.1,0,0.1,0,0.1,0c0,0,0,0,0.1,0c0,0,0,0,0,0c0,0,0-0.1,0-0.1c0,0,0-0.1-0.1-0.1
                            c-0.1,0-0.2-0.1-0.2,0c-0.1,0-0.1,0.1-0.1,0.2c0,0,0,0.1,0,0.1c0,0,0,0.1,0,0.1c0,0,0,0.1,0,0.1c0,0,0,0,0,0.1c0,0,0,0,0.1,0
                            c0,0,0,0,0.1,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0.1,0c0,0,0.1-0.1,0.1-0.1c0,0,0,0,0-0.1c0,0,0,0,0-0.1c0,0-0.1-0.1-0.1-0.1
                            C257.6,90.3,257.5,90.3,257.5,90.4L257.5,90.4z" />
                    </g>
                </g>
                </g>
                <g class="st19">
                <g class="st20">
                    <linearGradient id="SVGID_17_" gradientUnits="userSpaceOnUse" x1="376.0293" y1="534.6937" x2="384.9282"
                    y2="116.4465">
                    <stop offset="0" style="stop-color:#1F72AA" />
                    <stop offset="2.110190e-02" style="stop-color:#2577AF" />
                    <stop offset="0.1415" style="stop-color:#418EC7" />
                    <stop offset="0.2618" style="stop-color:#569FD9" />
                    <stop offset="0.3811" style="stop-color:#62A9E3" />
                    <stop offset="0.4979" style="stop-color:#66ACE7" />
                    <stop offset="1" style="stop-color:#345184" />
                    </linearGradient>
                    <path class="st27" d="M504.4,252.4c-3.7-2.1-8.1-2.7-11.4-5.3c-7.6-5.9-7.7-19.9-16.2-24.4c-7.7-4-16.4,2.9-21.8,10.1
                        c-5.4,7.2-10.9,16-19.4,17c-3.6,0.4-7.3-0.7-10.8,0c-4.5,0.9-8.1,4.5-11.4,8c-6.1,6.4-12.2,12.8-18.3,19.3
                        c-2.7,2.8-5.8,5.8-9.5,5.8c-8.5,0-11.8-14.9-20.3-15.2c-5.4-0.2-10,6-15.4,4.9c-3.8-0.7-6.3-4.8-10.1-5.7
                        c-5.5-1.4-10.1,4.3-13.6,9.1c-3.5,4.8-9,10-14,7.3c-2.3-1.2-3.9-3.9-6.4-4.9c-3.5-1.4-7.3,1.4-9.6,4.6c-2.4,3.1-4.2,7-7.5,8.9
                        c-2.6,1.5-5.6,1.6-8.5,2.2c-16.9,3-28.7,19.3-38.8,34.3v108.9c0,3.6,2.9,6.5,6.5,6.5h262.9c3.6,0,6.5-2.9,6.5-6.5V281.8
                        C516.1,270.4,513.6,257.7,504.4,252.4z" />
                </g>
                <g class="st20">

                    <image style="overflow:visible;opacity:0.28;" width="639" height="303" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAoIAAAEwCAYAAAAjGhD2AAAACXBIWXMAABcRAAAXEQHKJvM/AAAA
                        GXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAFfBJREFUeNrs3Ytu4kgagNEyYeb9
                        n3ca7NVIjdZdU5e/fAESzpEQdAKEOLuaT1WuckoAAAAAAAAAAAAAAAD8GJPPCwBwmkVYCT4AgLcL
                        xHcKrukH/A4AgLj7NlH46oiavsFnBAB4Vig+NQpfEVnTyd8HAPgJ0Xd6FD4zqqbB700Hf2YBCQCc
                        EXSjr1sOeP63CcFo0E0bXyfyAIB3i8Vlx3NHXvvWIdiLtikYgtPg+wIAvEsELgPRt2wMzLcKwS0B
                        GP2aEAQAvksIlh4vA889NQjPiKdWpEWibxp4zdbfRTQCACNxtzcEo/eReDwsBo8MosgoYCT2RoLw
                        iCgEADgiFkcDcG8k7g7C64kHKBp5+eOROBSCAMC7hmAv/h63KbUXiEzZ48POE5xOep9azPUCcGsY
                        ikIA4NXx14q+PP5Kt9R5XLpvfbanhOBIBLbir3VLncdCEAB4dQhGYu7f2zwYhafF4NFTw70IjN4u
                        adtIYS/8RCEAsCf8egGYOkG3nt7tRWH+86bK/WZ7Q7C3+nck9i6Bx9NgCB59dRIA4HMDMLoYpBSC
                        cyUEp0IMzo2f34rB4TDcE4K9bWJ6AZjH3qXy/UuKjxIKQQDg2SEYOQdwXt1fVv+eCjGYGkHYGxEc
                        isGjpoZL28S0RgDz8MtvU+Nx5FzCSKwCAIzEYCsEoxGYP54KMZhWwVgKwt0jgXtDsDYlHB0FvFRu
                        X51I7E0Vi0EA4JUhODcCMP/3vdAxc/Yz1iOIpc+ya4r4yBHB6DmBpeh7/PurEYnRIBSCAMArQnBu
                        BGDpNhVicG0dgVPjcz51RDByDl5K7SnhPPq+sq99VWJRDAIA7xiB0QC8p/+OBt4bDTOvmmfufN7h
                        UcEjRgSjo4Gt6KvdelFYisGU2ptOC0EAYDQESwGYghG4jr+v3/d5v9w7bbIeFVwqXfPUfQSnQBhe
                        GhFYul0DYbiOwuiooOgDAI4Iw9oq4XUI3isReK9E4DoGe0FamybetHBkNARbl3TrXTmkFoXXzv36
                        cT5C2NpeZiQEhSIACL3e91srhR8heG8E4L+3W2oPYtV+fum5va1julF45NRwLQCjEVi6fWWP8+nk
                        1l6DvRAUfwBAJAp7IZiPBpYi8Jb+Pxp46wRgbRua9WuWLAifOjU8spl0b3r4EXp/VR7nIViaKq7t
                        NVj6rM4ZBABa4Vf6enSByL1y+0r10cBIBJZisBaBp2wfUwqq1nWARyPwrywC8/vSOYS11cSRUUHh
                        BwCMBGAtBOdGCK5HAnsRGAnBdQxGIrAZhdcDD1xv1XBtYch61O/vLAx7MVhaTWwrGQBgT/zlX+ud
                        G1g7J/D2u1t+BUKwd2WSWmMthfcJ27uPYDQCW+cI5tPBf2chOBKDo4tGBCAAUIuo6CKRVgTeOhHY
                        ist1O/VisNRmh+0jOA1+r3TOXmt6eB17j1stCEvnDLamh/dEoFAEgJ8beqMxuL4OcD4tXJoSvqX/
                        73LSGwXM36vUUUv2OaLRV/3+nsUikdXCeRD2RgTzCMzvr4EY7I0KikAAEIPR50SnhfMIzHc4aS0M
                        ySPwsen0up0i08MvudZwbxFJ6coi+chgLQb/Tu2Rwdqo4NbLzolBABCC0cvJ9UYDfzVCcCnE39cq
                        AmtXICm9V2k7mZC9G0q34q82GtiKwGgM5vsM5otG1qOCKe2fIgYAPi8SI9PC6/MDb6uI650TWArJ
                        PAbzhpor/bU0+uzUDaUjVxppLRjJp3rXMfh3FoO9UcHa1UZaISgCAYBaDPb2DswXibQWh6QUm1aO
                        rH2YKg321GsNl4IvpbFVw7WFI6XbOggfzyutIB5dPSwGAYBWBKYU30C6FHCp8Zpb+u+pbr0YLDXY
                        suUXjoTgSCiVgmtkK5nIApJ8VLB0tZEpbd9TEAAQgqUQnFP9knKPqGutDi6dS3itxGAkAEcUY3Hr
                        PoK1IcktEdiKwdrIYD4qGFk9nMQgALAxAiMjgrVzAh/P/asTgZfUv2raodPDR5wjGN1GprSfYOuy
                        c7VzB6Orh4UgAPCsELx1InB9HuG9EoGRXVBau7UMX2XketLBbEVga3PpVhC2rkfcGk69iEAA4IAY
                        LG0k3doepjR9XJoKLg1mTQMxuNkZIdjbV/CS2lPGtSj8qkRgafVwa8GIGAQAjgjBe2pvFr0eAWyd
                        B1hro97egbsbZiQEp8D3S1PEtRisXXHk0ojA2hVJ8nCcggdQDAIAtQh8PK5tHVM6DS39fs7XKgIf
                        j2+pPA08pfiU8GgANs8b3DMiOA08r3fOYCsGe9vN1LaQiV5hRAgCAL3NpPP9/x5dcS9EY+vUt9ZF
                        MHqLQiKDci9dLDISgFOlgnsri1tR2FtpkzoHUxACwGcHYB6BKYvAWqStn9M6/6/WKltjcNdegmed
                        IzgShrWDMRqD+fNGNpUWggAgAvOv5ZeWW7fLvRKBl0AE1vqntxhk6/TwU0OwFn61XyJyfeLWqOFX
                        49+taw4LPwAgEoGPbVnm1f36eV9ZBN4DPRMZ+evF4VMXi0TDL/L9kWnj0uPeYpMtU8OiEAA+O/5S
                        au8hWIrA9UhgLfwi28FEzgU8dOuYo0NwTzCOnEfYOr+wNdRa+tniDwA+W773Xz7dO2UxmAohGGmV
                        aTAIn9Io1ycc3Mg5g70gLI0I9r5e2lC6FYGiEAA+z5K1wJI9XsfgvOqKRwDOnSYptUxK8e3tTg3D
                        VywWqUXYNBiJlzQ2pZySaWEA4L8NsAT/nYffkmIbQddaZgp2UrS13iIEIwc8pdgu2VtOpGxtvGjF
                        MACwt2MiHdJrmV7UvfXU8HTSgW0d5DRwYFvXFRaDAMDDMvDf/6XSE631Dynw/db7bOmp8H6Cl5OL
                        +YggTJUD3jqQaTAQn3ZSJgDwVnpb3aVOY5SaI3LO31u4PvEgR74/cm5hZOVx62cYEQQAlkIHrBeI
                        REbyUqBfel3Se4+U3nj7mK0HYeQ9R8/5S8Hniz8A+FxTIQqnLAZ7r+2tfzjiM06Bz/+yENzzy0TO
                        50vBP8LecwTTwX84AOD9LJ3/9tdGBJdGT0SbJToF/SP2Edxb5pFYjDx3z88GAH6WKRCFtddFF5f0
                        ts17C5dv9MeaAgd29L2eXt4AwNt1xpbz91rvNR3wXh8RgkcUcuQax2nH9wGAzwjCI2PyGQ307UPw
                        rF9+y7w9AEAv9M5YCPIylx/6R4rEoUAEAGpR1htM+hGDTRd/cwCAzyQEAQCE4NuZvvn7AwDfz0f1
                        weXN/whiDQD4SZH5Vm1jahgA4EMJQQAAIQgAgBAEAEAIAgAgBAEAEIIAAAhBAACEIAAAQhAAACEI
                        AIAQBABACAIAIAQBABCCAAAIQQAAhCAAAEIQAAAhCACAEAQAQAgCACAEAQAQggAACEEAAIQgAIAQ
                        BABACAIAIAQBABCCAAAIQQAAhCAAAEIQAAAhCACAEAQAQAgCACAEAQAQggAACEEAAIQgAABCEAAA
                        IQgAgBAEAEAIAgAgBAEAEIIAAAhBAACEIAAAQhAAQAg6BAAAQhAAACEIAIAQBABACAIAIAQBABCC
                        AAAIQQAAhCAAAEIQAAAhCACAEAQAQAgCACAEAQAQggAACEEAAIQgAABCEAAAIQgAgBAEAEAIAgAg
                        BAEAEIIAAAhBAAAhCACAEAQAQAgCACAEAQAQggAACEEAAIQgAABCEAAAIQgAgBAEAEAIAgAgBAEA
                        EIIAAAhBAACEIAAAQhAAACEIAIAQBABACAIAIAQBABCCAAAIQQAAhCAAgBAEAEAIAgAgBAEAEIIA
                        AAhBAACEIAAAQhAAACEIAIAQBABACAIAIAQBABCCAAAIQQAAhCAAAEIQAAAhCACAEAQAQAgCACAE
                        AQAQggAACEEAAIQgAABCEAAAIQgAIAQBABCCAAAIQQAAhCAAAEIQAAAhCACAEAQAQAgCACAEAQAQ
                        ggAACEEAAIQgAABCEAAAIQgAgBAEAEAIAgAgBAEAEIIAAAhBAACEIAAAQhAAACEIAIAQBAAQggAA
                        CEEAAIQgAABCEAAAIQgAgBAEAEAIAgAgBAEAEIIAAAhBAACEIAAAQhAAACEIAIAQBABACAIAIAQB
                        ABCCAAAIQQAAhCAAAEIQAIBvHIKLPw0A8AO9VeNc3vxACUIAQAR+YAgCACAEAQAQggAA/IgQXLJ7
                        AIBP8tIWurzpwXjG68UnALC1D57ZLB8Tgt/+gAIAHxWN37o/Lt/kIItDAOC79siPD8FlRykvlfvW
                        85bOz1iC7y8UAYBeP/TaYQk8P9omTw3UyxMP7HJAHG6NOMEHALwiJPf0Sxpop7cLwWUgyLaG3hJ8
                        L5EIAOztgb2NsQTfa0lPWk18OfFgnfmH2nrQlsYfRhACwGcG4DIQfL1p3SObYst7D/3s6xuWeOuP
                        EZm7z187bTzgk/9vAMCPjb8jXpO3yOgahZcPQl1f/EfoxV10hK/2R5kKcZd/fTrwfyQAwM8IxNKA
                        09ap4dZ7pcL3nuZy0kFcNhZ17cDUDuLoH6pW5aaGAeBz42/PSt+RTum1TjQyD+uW6xMP7jJQxr3n
                        L8HXjo4IikEA+OwoTJ1WWQIRGOmeVtC1fuahLm98sGsxmQIHfUnxkz+NCALAZ8dfdBQv0h6pE4Up
                        8NxSK53iesKB7H34JVDZrdscfF4aDLxJDALAR4Zg7WtLI9QinZICjdIbEYx8/WUh2BtN69VwGojA
                        eXVw58LBnn/H3LT692V131tBPLrCGAD4vAicU3lQai48nivP6Q1qpUaA9j7/00KwFU69xSLR6JsL
                        B7wUg+vYmysxOGWf2zmCAECpASKzlXOqD1T1nh+dBY1+1s0jhdcTD+Ry8G1uROCc/hwRnH9/hkv2
                        9akQgb1tZACAzwrAlP47jVsLv1qTlAa05sEQ7J3+1vpdDg/BrVOnW0b/8tu98fXL6nHp8+URmEef
                        AAQAeotYS8F373RKLwhbM6DR0cFdzlosEh0VnDtheC8c5HsWgfdV5N0Ln+myIQLFIQB8RvRFYzAf
                        FbxnrVKLwt6/exHY66ytv+vhIZgaH643zVs6OPdGcT8icB15UyUCl8EQFIEAIAZTqg9i5RFYe1z6
                        Xi0Go+cLHnp5urNWDUfO84tEYOkg3ioROFUicE7jU8NiEAA+LwQjI4JzIfZuq/tb9rXSLTKdPBKG
                        py4WWVJ9Ze3U+SCtZdVzI/zyA3j7/Vn/vf9afS0PvGUVgbVYbEWgAASAzw7CyIzmXIi7WycMayOG
                        o6OD+WdLjc97SAhuPaijC0NqBzKPwFuqjwI+fsbXKgJL08eTEAQAUv8qZJHzA2+r26/s37dUHikc
                        WWRyxOKR5awQ3LoNzL1xK8XgV+qfE5hvIp3HYC0CBSAAiMHS49q+gY+IWwfer9X9r0YEtqaOoyuI
                        D1lVfMQ5glMwEFujgLUYfATgr04EPkYBH7f77/vSiGAtAMUgAIjAvGNSKu9jnIdgHoF5DJbCsBeB
                        c4pfg/gpG0rXwi+6TUxvSji//UrlkcB8Svjr9+8yryLwnv4cEUxCEADYEIK1lskb5lfjlsdg7zzB
                        yCbUI7/bISHYi8ORCMxH/66FCGxtEfN4//vv1z7uL6l/jqAIBACiMdg6TzCfGs5v/6TyVPEtGIV7
                        L0d3Wgjml2kbuXpIbZXwVycC8xCcswi8ryKwFIIpOUcQAIjFYG+tw5zKi0XyCPwn1UcHa1vLtEYJ
                        a59/OAqvAwdnqvy79L1oDOYR+BWIwHxDx1IE9s4PtGoYAEgpvmp4PSKYr/otndr2TyAGayODo3sK
                        LsHfaXMItqIwBap5LsRbaSTwK8Wmgx/v81f6c2q5Ny1sehgAGInB6CXmSqOCvRiMnDN4ypTwnhCM
                        xGEvCksx2JsKTqv3+Sv9ORp4zd7jkmL7CJYCUBACwGcGYB6BaWMIRmOwFYG9kcHW75DSCRtKL5Uw
                        e8TT6CbS6wCcUnvkLqX/zsu3RgPzCCytGt4SgCIRAL5/7PWeU4rB2qrhddPU9hOMxGBkergWhJtH
                        CPcuFpka1dwaDZwCt0gEXtOf+wf2RgRT2rdYRAgCwM+KwD0hWJvljMRgb0uZyBVGWp89dAyuOw5s
                        7zzBOQu7PAD3jgQ+IvBaicCREBR5ACAWaxEYvUDGLRiDkX0Fe+cJtiIvPDJ4PfgATpUD9gix3ohg
                        LSxLEVgaDYwuFOmNBopCAPic+Mu/NrqXYG1UsBSD0T0FS+cJ9i41N2zvlUVq/84j8HF/T+XRwdpI
                        YGml8bUQgq3zAyMrhsUfAIjCWhBGrjlcC8HSApLavx+vrUXgXPhM0d/lkBCsRWG+aCQNxmDt/ZdU
                        vw7xtRKBrRAcDUBxCAA/N/oiEVXqmtaikdIUcb6IpDRaeAtG4DL4e5wWgq0gLNVzSn+eL1gLrfx1
                        11S/HF303MDe+YGiDwDEYSsCU2ovGqlNEZfC8JbK5whGIjBvpadODZfCrxSBte1kSgtIWiH49fs1
                        X6uDut58ujUS2FskYrsYABB9aUcI1vZJLo0O5iGYjxhuWS3c2lPw8H0Eo3FYOmDRuCqNBs6r6Lun
                        2HmBkdFAkQcAjIZgKwbvqT46WBshrC04icTgaOAeFoKRUcFaEEYuT7f+xUsrgyN7Bm5ZLQwA0Fsw
                        0jpfsLWIpBSFpedGRwJ3jQbuCcFeHOYfZP4daaURwtpBXh/IfAQwujgken6gMAQA4dfqkyNiMA/D
                        0ihib2o4+tlPD8HoqOD6+XPje49zAh+PL6uAfMTgPY0vDrF3IAAwGoLRUcFeDJYC794Jv9aU8GGj
                        gXtDsBWHpQ8xr+KudTAvq/t16I1EYCkEW7EnAgFADPZicOvI4BKIw941hUeuLPK0ECyNCkZjcCoc
                        3DwIS4tAotPBI+cFCkEAEIG9EEydOFsqMdcbMaw9PzIKuHk08IgQrIVha6p4XkXcvIq+VDiQpeCL
                        RmApAG0eDQBEIrAVW63RwVLM1WJvbrwmMgr48hHBlMqLREphmCpBuA7Gy+qXnbJonAox2BoFFIIA
                        wBkhmIIxGI3DJXCrfZ5dUXjGPoKRKeJaFOavnbIgjIwAbtkuRgQCgCCMfC8SgstAHEa3iFkCcfqy
                        EKyFYekaxPlzSrdlMPoim0YLQQDgyBBMgzEYGfGrPa5F4C5HB9DU+HdtxK4UdVPne+mAABR/AMBI
                        FPaCsBWFKcUuFVd6v1YE7orCM2IoGoMptUf2psbzaiHY+/lCEAA4IgRrMRiJu15E1sLv0Ag8M4Za
                        GzZHRglbX2vd9342AMARYRidLh4Nvsgo4CEReHYg9YIsOlK4JwBHf0fBCACfHXijz40E4Ugsth4f
                        GoHPCp89QTgSf6aAAYBnR2Mv4PZ+/5QAfHYkRSJtz2MhCAC8OgR7MbcMPj41Al8RSaNBGA0+EQgA
                        vEsMRkLwpQH46lCKhtszok8sAgDLCa+LTO++JADfJYJGN3me3vz3AQAE5GgMPj0A3zGcppO/DwDw
                        LjH40gB893iavvFnBwCE4ZHP+7gQPOIzCkUA4JWh93bh9xNiSeABAD85GEWVQAQABB8AAAAAAAAA
                        AAAAAAAE/U+AAQD0GWmvFFKJtAAAAABJRU5ErkJggg==" transform="matrix(0.48 0 0 0.48 232.88 321)">
                    </image>
                    <g>
                    <linearGradient id="SVGID_18_" gradientUnits="userSpaceOnUse" x1="654.0192" y1="537.0079" x2="-90.2505"
                        y2="126.0416">
                        <stop offset="0" style="stop-color:#1F72AA" />
                        <stop offset="2.110190e-02" style="stop-color:#2577AF" />
                        <stop offset="0.1415" style="stop-color:#418EC7" />
                        <stop offset="0.2618" style="stop-color:#569FD9" />
                        <stop offset="0.3811" style="stop-color:#62A9E3" />
                        <stop offset="0.4979" style="stop-color:#66ACE7" />
                        <stop offset="1" style="stop-color:#345184" />
                    </linearGradient>
                    <path class="st28"
                        d="M241.3,329.3v108.2c0,3.6,2.9,6.5,6.5,6.5h262.9c3.6,0,6.5-2.9,6.5-6.5V329.3H241.3z" />
                    </g>
                </g>
                <g class="st29">
                    <linearGradient id="SVGID_19_" gradientUnits="userSpaceOnUse" x1="507.8223" y1="373.6406" x2="218.2043"
                    y2="454.5395">
                    <stop offset="0.3425" style="stop-color:#66ACE7" />
                    <stop offset="1" style="stop-color:#0A3066" />
                    </linearGradient>
                    <path class="st30" d="M491,393.9c-8.7-0.9-18.3,0.4-26-2.4c-9-3.2-12-10.5-19.6-14.9c-2.6-1.5-6.1-2.7-9.6-2.4
                        c-8.9,0.9-9.9,9.8-18.3,11.8c-7.6,1.8-16.9-3.2-23.8-0.4c-3.6,1.5-5.3,4.9-9.6,5.3c-1.9,0.2-3.7-0.3-5.4-0.8
                        c-6.7-2.1-12.7-5-17.6-8.5c-2-1.4-3.8-3-6.3-4.1c-2.5-1.1-5.9-1.5-8.5-0.5c-2.5,1-3.7,3.1-6.4,3.9c-3.5,1-7.4-0.8-9.9-2.7
                        s-4.9-4.2-8.7-4.6c-2-0.2-4.1,0.2-6.1,0.2c-5.6,0-10-3-15.2-4.2c-6.9-1.6-15.4,0.3-19.3,4.3c-2.2,2.3-3.2,5.4-6.9,6.8
                        c-5.1,2-11.4-0.4-16.3-2.6c-4.9-2.1-12-4-16.2-1.3v62.4c0,2.5,2.9,4.6,6.5,4.6h262.9c3.6,0,6.5-2.1,6.5-4.6v-32.2
                        C512.8,400.3,502.5,395.1,491,393.9z" />
                </g>
                <g class="st31">
                    <path class="st8" d="M261.7,346.7c2.6,0,4.9,1,7.1,1.8c2.3,0.8,5.4,1.3,7.3,0.3c0.4-0.2,0.9-0.5,1.4-0.4c0.3,0.1,0.4,0.2,0.6,0.3
                        c1.3,1.2,3,2.3,4.8,3.3c1.5,0.8,3.3,1.5,5.2,1.3c2.4-0.2,3.8-1.6,4.2-3c0.1-0.3,0.2-0.7,0.6-0.9c0.6-0.4,1.7-0.4,2.6-0.3
                        c2.2,0.1,4.5,0.1,6.7-0.2c2.2-0.3,4.2-1,5.3-2.1" />
                </g>
                <g class="st31">
                    <path class="st8" d="M430.4,353.9c5.6,0.6,10.2,3.8,15.9,3.6c2.1-0.1,4.2-0.6,5.7-1.5c0.3-0.2,0.7-0.4,1.1-0.3
                        c0.4,0,0.6,0.3,0.8,0.5c1.3,1.4,3.5,2.4,5.6,3.3c2.3,0.9,4.7,1.8,7.3,2.2c2.6,0.4,5.6,0.3,7.9-0.6s3.8-2.7,3.3-4.3
                        c1.7,0.7,3.5,1.5,5.5,1.7c2,0.2,4.4-0.2,5.3-1.4c0.3-0.4,0.6-0.9,1.3-1c0.3,0,0.6,0.1,0.9,0.1c2.3,0.6,4.9,0.7,7.2,0.2
                        c3.5-0.7,6.3-2.7,10-3" />
                </g>
                <g class="st20">
                    <g>
                    <g>
                        <path class="st9" d="M285.6,372.4C285.6,372.4,285.6,372.3,285.6,372.4c0-0.1,0-0.1,0-0.1C285.5,372.3,285.5,372.3,285.6,372.4
                                C285.5,372.3,285.5,372.4,285.6,372.4L285.6,372.4z" />
                    </g>
                    </g>
                    <g>
                    <g>
                        <path class="st9" d="M270.2,352.3c0,0,0.1,0,0.1,0c0,0,0,0,0,0c0,0,0,0,0-0.1c0,0,0-0.1,0-0.1c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0
                                c0,0,0,0,0,0c0,0,0,0,0,0.1c0,0,0,0.1,0,0.1C270.2,352.3,270.2,352.3,270.2,352.3L270.2,352.3z" />
                    </g>
                    </g>
                    <g>
                    <g>
                        <path class="st9" d="M514.1,383.7C514.1,383.7,514.1,383.7,514.1,383.7C514.1,383.7,514.1,383.7,514.1,383.7
                                C514.1,383.7,514.1,383.7,514.1,383.7C514.1,383.7,514.2,383.7,514.1,383.7C514.2,383.7,514.2,383.7,514.1,383.7
                                C514.2,383.7,514.2,383.7,514.1,383.7C514.2,383.7,514.2,383.7,514.1,383.7C514.2,383.7,514.2,383.7,514.1,383.7
                                C514.2,383.7,514.2,383.7,514.1,383.7C514.2,383.7,514.2,383.8,514.1,383.7C514.2,383.8,514.2,383.8,514.1,383.7
                                c0.1,0,0.1,0,0.1,0C514.2,383.8,514.2,383.8,514.1,383.7c0.1,0,0.1,0,0.1,0.1C514.2,383.8,514.2,383.8,514.1,383.7
                                C514.2,383.7,514.2,383.8,514.1,383.7C514.2,383.8,514.2,383.7,514.1,383.7C514.2,383.7,514.2,383.7,514.1,383.7
                                c0.1,0,0.1,0,0.1,0C514.2,383.7,514.2,383.7,514.1,383.7c0.1,0,0.1,0,0.1,0C514.2,383.7,514.2,383.7,514.1,383.7
                                C514.2,383.7,514.2,383.7,514.1,383.7C514.2,383.7,514.2,383.7,514.1,383.7C514.2,383.7,514.2,383.7,514.1,383.7
                                C514.2,383.7,514.2,383.7,514.1,383.7C514.2,383.7,514.2,383.7,514.1,383.7C514.2,383.7,514.2,383.7,514.1,383.7
                                C514.2,383.7,514.2,383.7,514.1,383.7C514.2,383.7,514.1,383.7,514.1,383.7C514.1,383.7,514.1,383.7,514.1,383.7
                                C514.1,383.7,514.1,383.7,514.1,383.7C514.1,383.7,514.1,383.7,514.1,383.7C514.1,383.7,514.2,383.8,514.1,383.7
                                c0.1,0,0.1,0,0.1,0c0,0,0,0,0.1,0c0,0,0,0,0,0c0,0,0-0.1,0-0.1c0,0,0-0.1-0.1-0.1c-0.1,0-0.2-0.1-0.2,0c-0.1,0-0.1,0.1-0.1,0.2
                                c0,0,0,0.1,0,0.1c0,0,0,0.1,0,0.1c0,0,0,0.1,0,0.1c0,0,0,0,0,0.1c0,0,0,0,0.1,0c0,0,0,0,0.1,0c0,0,0,0,0,0c0,0,0,0,0,0
                                c0,0,0,0,0.1,0c0,0,0.1-0.1,0.1-0.1c0,0,0,0,0-0.1c0,0,0,0,0-0.1c0,0-0.1-0.1-0.1-0.1C514.2,383.7,514.2,383.7,514.1,383.7
                                L514.1,383.7z" />
                    </g>
                    </g>
                    <g>
                    <g>
                        <path class="st9"
                        d="M347.7,347.2C347.7,347.2,347.7,347.2,347.7,347.2c0.1,0,0.2,0,0.2-0.1c0,0,0,0,0.1-0.1c0,0,0-0.1,0-0.1
                                c0,0,0,0,0-0.1c0,0,0-0.1-0.1-0.1c0,0,0,0-0.1,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0.1c0,0,0,0-0.1,0.1
                                c0,0,0,0.1,0,0.1c0,0,0,0,0,0.1c0,0,0,0.1,0.1,0.1c0,0,0,0,0.1,0C347.6,347.2,347.6,347.2,347.7,347.2L347.7,347.2z" />
                    </g>
                    </g>
                    <g>
                    <g>
                        <path class="st9" d="M330.1,401.2C330.1,401.2,330.1,401.2,330.1,401.2c0.1,0,0.2,0,0.2-0.1c0,0,0,0,0.1-0.1c0,0,0-0.1,0-0.1
                                c0,0,0,0,0-0.1c0,0,0-0.1-0.1-0.1c0,0,0,0-0.1,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0.1c0,0,0,0-0.1,0.1
                                c0,0,0,0.1,0,0.1c0,0,0,0,0,0.1c0,0,0,0.1,0.1,0.1c0,0,0,0,0.1,0C330,401.2,330,401.2,330.1,401.2L330.1,401.2z" />
                    </g>
                    </g>
                    <g>
                    <g>
                        <path class="st9"
                        d="M432.5,388.5C432.5,388.5,432.6,388.5,432.5,388.5c0.1,0,0.2,0,0.2-0.1c0,0,0,0,0.1-0.1c0,0,0-0.1,0-0.1
                                c0,0,0,0,0-0.1c0,0,0-0.1-0.1-0.1c0,0,0,0-0.1,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0.1c0,0,0,0-0.1,0.1
                                c0,0,0,0.1,0,0.1c0,0,0,0,0,0.1c0,0,0,0.1,0.1,0.1c0,0,0,0,0.1,0C432.4,388.5,432.4,388.5,432.5,388.5L432.5,388.5z" />
                    </g>
                    </g>
                    <g>
                    <g>
                        <path class="st9"
                        d="M294.3,419.5C294.4,419.5,294.4,419.5,294.3,419.5c0.1,0,0.2,0,0.2-0.1c0,0,0,0,0.1-0.1c0,0,0-0.1,0-0.1
                                c0,0,0,0,0-0.1c0,0,0-0.1-0.1-0.1c0,0,0,0-0.1,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0.1c0,0,0,0-0.1,0.1
                                c0,0,0,0.1,0,0.1c0,0,0,0,0,0.1c0,0,0,0.1,0.1,0.1c0,0,0,0,0.1,0C294.2,419.5,294.3,419.5,294.3,419.5L294.3,419.5z" />
                    </g>
                    </g>
                    <g>
                    <g>
                        <path class="st9" d="M379.3,349.7c0,0,0.1,0,0.1,0c0,0,0.1,0,0.1-0.1c0,0,0-0.1,0.1-0.1c0,0,0-0.1,0-0.1c0,0,0-0.1,0-0.1
                                c0-0.1,0-0.1-0.1-0.1c0,0,0,0-0.1,0c0,0-0.1,0-0.2,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0.1c0,0,0,0.1-0.1,0.1c0,0,0,0.1,0,0.1
                                c0,0,0,0.1,0,0.1c0,0.1,0,0.1,0.1,0.1c0,0,0,0,0.1,0C379.2,349.6,379.2,349.7,379.3,349.7L379.3,349.7z" />
                    </g>
                    </g>
                    <g>
                    <g>
                        <path class="st9" d="M475,347.9c0,0,0.1,0,0.1,0c0,0,0.1,0,0.1-0.1c0,0,0-0.1,0.1-0.1c0,0,0-0.1,0-0.1c0,0,0-0.1,0-0.1
                                c0-0.1,0-0.1-0.1-0.1c0,0,0,0-0.1,0c0,0-0.1,0-0.2,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0.1c0,0,0,0.1-0.1,0.1c0,0,0,0.1,0,0.1
                                c0,0,0,0.1,0,0.1c0,0.1,0,0.1,0.1,0.1c0,0,0,0,0.1,0C474.8,347.9,474.9,347.9,475,347.9L475,347.9z" />
                    </g>
                    </g>
                    <g>
                    <g>
                        <path class="st9"
                        d="M484.2,404.3c0.1,0,0.1,0,0.2,0c0,0,0.1,0,0.1-0.1c0,0,0.1-0.1,0.1-0.1c0,0,0-0.1,0-0.2c0,0,0-0.1,0-0.1
                                c0-0.1-0.1-0.1-0.1-0.2c0,0-0.1,0-0.1-0.1c-0.1,0-0.1-0.1-0.2-0.1c-0.1,0-0.1,0-0.2,0c0,0-0.1,0-0.1,0.1c0,0-0.1,0.1-0.1,0.1
                                c0,0,0,0.1,0,0.2c0,0,0,0.1,0,0.1c0,0.1,0.1,0.1,0.1,0.2c0,0,0.1,0,0.1,0.1C484,404.3,484.1,404.3,484.2,404.3L484.2,404.3z" />
                    </g>
                    </g>
                    <g>
                    <g>
                        <path class="st9"
                        d="M408.1,384.3c0.1,0,0.1,0,0.2,0c0,0,0.1,0,0.1-0.1c0,0,0.1-0.1,0.1-0.1c0,0,0-0.1,0-0.2c0,0,0-0.1,0-0.1
                                c0-0.1-0.1-0.1-0.1-0.2c0,0-0.1,0-0.1-0.1c-0.1,0-0.1-0.1-0.2-0.1c-0.1,0-0.1,0-0.2,0c0,0-0.1,0-0.1,0.1c0,0-0.1,0.1-0.1,0.1
                                c0,0,0,0.1,0,0.2c0,0,0,0.1,0,0.1c0,0.1,0.1,0.1,0.1,0.2c0,0,0.1,0,0.1,0.1C408,384.3,408.1,384.3,408.1,384.3L408.1,384.3z" />
                    </g>
                    </g>
                    <g>
                    <g>
                        <path class="st9"
                        d="M447.5,338.1c0.1,0,0.1,0,0.2,0c0,0,0.1,0,0.1-0.1c0,0,0.1-0.1,0.1-0.1c0,0,0-0.1,0-0.2c0,0,0-0.1,0-0.1
                                c0-0.1-0.1-0.1-0.1-0.2c0,0-0.1,0-0.1-0.1c-0.1,0-0.1-0.1-0.2-0.1c-0.1,0-0.1,0-0.2,0c0,0-0.1,0-0.1,0.1c0,0-0.1,0.1-0.1,0.1
                                c0,0,0,0.1,0,0.2c0,0,0,0.1,0,0.1c0,0.1,0.1,0.1,0.1,0.2c0,0,0.1,0,0.1,0.1C447.4,338.1,447.5,338.1,447.5,338.1L447.5,338.1z" />
                    </g>
                    </g>
                    <g>
                    <g>
                        <path class="st9"
                        d="M265.8,384.8c0.1,0,0.1,0,0.2,0c0,0,0.1,0,0.1-0.1c0,0,0.1-0.1,0.1-0.1c0,0,0-0.1,0-0.2c0,0,0-0.1,0-0.1
                                c0-0.1-0.1-0.1-0.1-0.2c0,0-0.1,0-0.1-0.1c-0.1,0-0.1-0.1-0.2-0.1c-0.1,0-0.1,0-0.2,0c0,0-0.1,0-0.1,0.1c0,0-0.1,0.1-0.1,0.1
                                c0,0,0,0.1,0,0.2c0,0,0,0.1,0,0.1c0,0.1,0.1,0.1,0.1,0.2c0,0,0.1,0,0.1,0.1C265.7,384.8,265.7,384.8,265.8,384.8L265.8,384.8z" />
                    </g>
                    </g>
                    <g>
                    <g>
                        <path class="st9"
                        d="M482.1,435.5c0.1,0,0.1,0,0.2,0c0,0,0.1,0,0.1-0.1c0,0,0.1-0.1,0.1-0.1c0,0,0-0.1,0-0.2c0,0,0-0.1,0-0.1
                                c0-0.1-0.1-0.1-0.1-0.2c0,0-0.1,0-0.1-0.1c-0.1,0-0.1-0.1-0.2-0.1c-0.1,0-0.1,0-0.2,0c0,0-0.1,0-0.1,0.1c0,0-0.1,0.1-0.1,0.1
                                c0,0,0,0.1,0,0.2c0,0,0,0.1,0,0.1c0,0.1,0.1,0.1,0.1,0.2c0,0,0.1,0,0.1,0.1C482,435.5,482,435.5,482.1,435.5L482.1,435.5z" />
                    </g>
                    </g>
                    <g>
                    <g>
                        <path class="st9"
                        d="M272.2,435.9c0.1,0,0.1,0,0.2,0c0,0,0.1,0,0.1-0.1c0,0,0.1-0.1,0.1-0.1c0,0,0-0.1,0-0.2c0,0,0-0.1,0-0.1
                                c0-0.1-0.1-0.1-0.1-0.2c0,0-0.1,0-0.1-0.1c-0.1,0-0.1-0.1-0.2-0.1c-0.1,0-0.1,0-0.2,0c0,0-0.1,0-0.1,0.1c0,0-0.1,0.1-0.1,0.1
                                c0,0,0,0.1,0,0.2c0,0,0,0.1,0,0.1c0,0.1,0.1,0.1,0.1,0.2c0,0,0.1,0,0.1,0.1C272.1,435.9,272.2,435.9,272.2,435.9L272.2,435.9z" />
                    </g>
                    </g>
                </g>
                <linearGradient id="SVGID_20_" gradientUnits="userSpaceOnUse" x1="414.3594" y1="329.6703" x2="272.6013"
                    y2="320.5644">
                    <stop offset="7.292849e-03" style="stop-color:#5A8FB2;stop-opacity:0" />
                    <stop offset="1" style="stop-color:#304B7C" />
                </linearGradient>
                <path class="st32" d="M241.3,325h184c-111.5-10.3-161.6-8.8-184-5.6V325z" />
                <g class="st33">
                    <linearGradient id="SVGID_21_" gradientUnits="userSpaceOnUse" x1="527.3926" y1="355.8653" x2="493.4664"
                    y2="304.4185">
                    <stop offset="7.292849e-03" style="stop-color:#5A8FB2;stop-opacity:0" />
                    <stop offset="1" style="stop-color:#304B7C" />
                    </linearGradient>
                    <path class="st34" d="M485.4,326.6c-0.6,0.8-1,1.7-1.2,2.7h33v-27.8c-0.6-0.4-1.2-0.6-1.7-0.9c-2-0.9-4.2-1.6-6.4-1.9
                        c-1.3-0.2-2.7-0.3-3.9,0.1c-1.3,0.4-2.4,1.4-2.5,2.7c-0.2,1.3,0.7,2.6,1.7,3.4c1,0.9,2.2,1.5,3.2,2.4c-3.8-1.1-7.7-2-11.7-1.6
                        c-1,0.1-2.1,0.3-3,0.8s-1.6,1.4-1.7,2.4c-0.1,1.3,0.9,2.5,2.1,3c1.2,0.5,2.5,0.5,3.8,0.3s2.6-0.4,3.9-0.3c-3.3,0.2-6.5,1-9.5,2.2
                        c-2.1,0.9-4.2,2-5.7,3.7c-0.8,0.9-1.5,2.3-1.1,3.4c0.3,0.8,1,1.3,1.8,1.5c0.8,0.2,1.6,0.2,2.4,0.2c1.8-0.1,3.5-0.4,5.2-0.9
                        c-1.7,0.5-3.4,1.2-5,1.9C487.8,324.6,486.4,325.4,485.4,326.6z" />
                </g>
                <g class="st33">

                    <linearGradient id="SVGID_22_" gradientUnits="userSpaceOnUse" x1="281.7108" y1="347.7183" x2="250.1472"
                    y2="299.8542" gradientTransform="matrix(-1 0 0 1 510.5359 0)">
                    <stop offset="7.292849e-03" style="stop-color:#5A8FB2;stop-opacity:0" />
                    <stop offset="1" style="stop-color:#304B7C" />
                    </linearGradient>
                    <path class="st35" d="M263.8,322.3c0.4,0.8,0.7,1.7,0.8,2.7h-23.4v-27.8c0.5-0.4,0.9-0.6,1.2-0.9c1.4-0.9,2.9-1.6,4.5-1.9
                        c0.9-0.2,1.9-0.3,2.8,0.1c0.9,0.4,1.7,1.4,1.8,2.7c0.1,1.3-0.5,2.6-1.2,3.4c-0.7,0.9-1.6,1.5-2.3,2.4c2.7-1.1,5.5-2,8.3-1.6
                        c0.7,0.1,1.5,0.3,2.1,0.8c0.6,0.5,1.2,1.4,1.2,2.4c0.1,1.3-0.6,2.5-1.5,3c-0.8,0.5-1.8,0.5-2.7,0.3c-0.9-0.2-1.8-0.4-2.7-0.3
                        c2.3,0.2,4.6,1,6.7,2.2c1.5,0.9,3,2,4,3.7c0.6,0.9,1.1,2.3,0.8,3.4c-0.2,0.8-0.7,1.3-1.3,1.5c-0.6,0.2-1.1,0.2-1.7,0.2
                        c-1.2-0.1-2.5-0.4-3.7-0.9c1.2,0.5,2.4,1.2,3.6,1.9C262.1,320.3,263.1,321.1,263.8,322.3z" />
                </g>
                <g class="st33">
                    <linearGradient id="SVGID_23_" gradientUnits="userSpaceOnUse" x1="534.1565" y1="351.1822" x2="500.4572"
                    y2="300.0795">
                    <stop offset="7.292849e-03" style="stop-color:#5A8FB2;stop-opacity:0" />
                    <stop offset="1" style="stop-color:#304B7C" />
                    </linearGradient>
                    <path class="st36" d="M501.3,325.4c-0.6,1.1-1,2.5-1.2,3.9h17.1v-33.6c-1.9-0.4-3.8-0.6-5.6-0.4c-1,0.1-2,0.4-2.9,1.1
                        c-0.9,0.7-1.6,2-1.7,3.5c-0.1,1.9,0.9,3.6,2,4.3c1.2,0.7,2.5,0.7,3.7,0.5s2.5-0.6,3.8-0.4c-3.2,0.3-6.3,1.4-9.2,3.2
                        c-2.1,1.3-4.1,2.9-5.5,5.4c-0.8,1.4-1.5,3.3-1,5c0.3,1.1,1,1.9,1.8,2.2c0.8,0.3,1.6,0.3,2.4,0.2c1.7-0.2,3.4-0.6,5.1-1.3
                        c-1.7,0.8-3.3,1.7-4.9,2.7C503.6,322.6,502.2,323.7,501.3,325.4z" />
                </g>
                </g>
                <g class="st19">
                <g class="st20">
                    <path class="st9" d="M437.4,174H323.3c-4,0-7.2-3.2-7.2-7.2v0c0-4,3.2-7.2,7.2-7.2h114.1c4,0,7.2,3.2,7.2,7.2v0
                        C444.6,170.8,441.4,174,437.4,174z" />
                    <path class="st37" d="M328.6,168.8c-0.1-0.4-0.3-0.7-0.5-1c-0.2-0.3-0.5-0.6-0.8-0.9c-0.2-0.1-0.4-0.2-0.6-0.3
                        c0.1-0.1,0.2-0.1,0.3-0.2c0.2-0.2,0.4-0.4,0.5-0.7c0.1-0.3,0.2-0.5,0.3-0.8c0-0.1,0-0.3,0-0.4c0,0,0,0,0,0c0-0.3,0-0.6-0.1-0.8
                        c-0.1-0.3-0.2-0.5-0.4-0.7c-0.1-0.1-0.2-0.2-0.3-0.3c-0.1-0.1-0.2-0.2-0.3-0.3c-0.2-0.2-0.4-0.3-0.7-0.4
                        c-0.3-0.1-0.5-0.1-0.8-0.2c-0.3,0-0.6,0-0.9,0.1c-0.3,0.1-0.5,0.2-0.8,0.3c-0.2,0.2-0.4,0.3-0.6,0.5c-0.1,0.1-0.2,0.2-0.3,0.4
                        c-0.1,0.1-0.1,0.3-0.2,0.4c-0.1,0.2-0.2,0.5-0.2,0.8c0,0.3,0,0.6,0.1,0.9c0.1,0.3,0.2,0.5,0.3,0.8c0.1,0.2,0.3,0.4,0.5,0.6
                        c0,0,0.1,0.1,0.1,0.1c-0.1,0.1-0.3,0.1-0.4,0.2c-0.3,0.2-0.6,0.5-0.9,0.8c-0.1,0.2-0.2,0.3-0.3,0.5c-0.1,0.2-0.2,0.4-0.3,0.5
                        c-0.1,0.4-0.2,0.7-0.3,1.1c0,0.1,0,0.2,0,0.3c0,0,0,0.1,0,0.1l0,0.3h0.7l0.3,0l0-0.3c0-0.2,0-0.3,0-0.5c0-0.2,0.1-0.5,0.2-0.7
                        c0.1-0.2,0.2-0.4,0.4-0.6c0.1-0.2,0.3-0.4,0.5-0.5c0.2-0.1,0.4-0.3,0.6-0.4c0.2-0.1,0.5-0.2,0.7-0.2c0.2,0,0.5,0,0.7,0
                        c0.2,0,0.5,0.1,0.7,0.2c0.2,0.1,0.4,0.2,0.6,0.4c0.2,0.2,0.4,0.3,0.5,0.5c0.1,0.2,0.3,0.4,0.4,0.6c0.1,0.2,0.2,0.5,0.2,0.7
                        c0,0.1,0,0.2,0,0.4c0,0,0,0.1,0,0.1l0,0.4h0.8l0.3-0.1l0-0.3c0,0,0-0.1,0-0.1C328.7,169.5,328.7,169.1,328.6,168.8z M323.2,164.2
                        c0-0.1,0.1-0.3,0.1-0.4c0.1-0.1,0.1-0.3,0.2-0.4c0.1-0.1,0.2-0.2,0.3-0.3c0.1-0.1,0.2-0.2,0.4-0.2c0.1-0.1,0.3-0.1,0.4-0.1
                        c0.2,0,0.3,0,0.5,0c0.1,0,0.3,0.1,0.4,0.1c0.1,0.1,0.2,0.1,0.4,0.2c0.1,0.1,0.2,0.2,0.3,0.3c0.1,0.1,0.2,0.2,0.2,0.4
                        c0.1,0.1,0.1,0.3,0.1,0.4c0,0.1,0,0.1,0,0.2c0,0.1,0,0.2,0,0.2c0,0.2-0.1,0.3-0.1,0.4c-0.1,0.1-0.1,0.2-0.2,0.4
                        c-0.1,0.1-0.2,0.2-0.3,0.3c-0.1,0.1-0.3,0.2-0.4,0.2c-0.1,0.1-0.3,0.1-0.4,0.1c-0.2,0-0.3,0-0.5,0c-0.1,0-0.3-0.1-0.4-0.1
                        c-0.1-0.1-0.3-0.1-0.4-0.2c-0.1-0.1-0.2-0.2-0.3-0.3c-0.1-0.1-0.2-0.2-0.2-0.4c-0.1-0.1-0.1-0.3-0.1-0.5
                        C323.2,164.5,323.2,164.3,323.2,164.2z" />
                    <text transform="matrix(1 0 0 1 358.7271 169.2477)" class="st37 st38 st39">Username</text>
                </g>
                <g class="st20">
                    <path class="st9" d="M437.4,203H323.3c-4,0-7.2-3.2-7.2-7.2v0c0-4,3.2-7.2,7.2-7.2h114.1c4,0,7.2,3.2,7.2,7.2v0
                        C444.6,199.7,441.4,203,437.4,203z" />
                    <g>
                    <g>
                        <path class="st37" d="M327.8,198.4c-0.1,0-0.1,0-0.2,0c-0.2,0-0.3,0-0.5,0c-0.2,0-0.5,0-0.7,0c-0.3,0-0.6,0-0.9,0
                                c-0.3,0-0.7,0-1,0c-0.3,0-0.7,0-1,0c-0.3,0-0.6,0-0.9,0c-0.3,0-0.5,0-0.8,0c-0.2,0-0.4,0-0.6,0c-0.1,0-0.2,0-0.3,0
                                c0,0,0,0-0.1,0c0,0,0.1,0,0.1,0c0,0-0.1,0-0.1,0c0,0,0.1,0,0.1,0c0,0-0.1,0-0.1-0.1c0,0,0.1,0,0.1,0.1c0,0-0.1,0-0.1-0.1
                                c0,0,0,0.1,0.1,0.1c0,0,0-0.1-0.1-0.1c0,0,0,0.1,0,0.1c0,0,0-0.1,0-0.1c0,0,0,0.1,0,0.1c0-0.1,0-0.1,0-0.2c0-0.1,0-0.2,0-0.3
                                c0-0.3,0-0.7,0-1c0-0.4,0-0.8,0-1.2c0-0.4,0-0.7,0-1.1c0-0.2,0-0.3,0-0.5c0,0,0,0,0-0.1c0,0,0,0.1,0,0.1c0,0,0-0.1,0-0.1
                                c0,0,0,0.1,0,0.1c0,0,0-0.1,0.1-0.1c0,0,0,0.1-0.1,0.1c0,0,0-0.1,0.1-0.1c0,0-0.1,0-0.1,0.1c0,0,0.1,0,0.1-0.1c0,0-0.1,0-0.1,0
                                c0,0,0.1,0,0.1,0c0,0-0.1,0-0.1,0c0.1,0,0.2,0,0.2,0c0.2,0,0.3,0,0.5,0c0.2,0,0.5,0,0.7,0c0.3,0,0.6,0,0.9,0c0.3,0,0.7,0,1,0
                                c0.3,0,0.7,0,1,0c0.3,0,0.6,0,0.9,0c0.3,0,0.5,0,0.8,0c0.2,0,0.4,0,0.6,0c0.1,0,0.2,0,0.3,0c0,0,0,0,0.1,0c0,0-0.1,0-0.1,0
                                c0,0,0.1,0,0.1,0c0,0-0.1,0-0.1,0c0,0,0.1,0,0.1,0.1c0,0-0.1,0-0.1-0.1c0,0,0.1,0,0.1,0.1c0,0,0-0.1-0.1-0.1c0,0,0,0.1,0.1,0.1
                                c0,0,0-0.1,0-0.1c0,0,0,0.1,0,0.1c0,0,0-0.1,0-0.1c0,0.1,0,0.1,0,0.2c0,0.1,0,0.2,0,0.3c0,0.3,0,0.7,0,1c0,0.4,0,0.8,0,1.2
                                c0,0.4,0,0.7,0,1.1C327.8,198.1,327.8,198.2,327.8,198.4C327.8,198.4,327.8,198.4,327.8,198.4
                                C327.8,198.4,327.9,198.4,327.8,198.4C327.9,198.4,327.8,198.4,327.8,198.4C327.8,198.4,327.9,198.4,327.8,198.4
                                C327.9,198.4,327.8,198.4,327.8,198.4C327.8,198.4,327.9,198.4,327.8,198.4C327.9,198.4,327.8,198.4,327.8,198.4
                                C327.8,198.4,327.9,198.4,327.8,198.4C327.9,198.4,327.8,198.4,327.8,198.4C327.8,198.4,327.9,198.4,327.8,198.4
                                C327.9,198.4,327.8,198.4,327.8,198.4C327.8,198.4,327.9,198.4,327.8,198.4C327.9,198.4,327.9,198.4,327.8,198.4
                                c-0.1,0-0.2,0-0.3,0.1c-0.1,0.1-0.1,0.2-0.1,0.3c0,0.1,0,0.2,0.1,0.3c0.1,0.1,0.2,0.1,0.3,0.1c0.1,0,0.1,0,0.2,0c0,0,0,0,0.1,0
                                c0.1,0,0.2-0.1,0.2-0.1c0.1-0.1,0.2-0.1,0.2-0.2c0-0.1,0.1-0.1,0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.1,0-0.2,0-0.4c0-0.2,0-0.4,0-0.7
                                c0-0.3,0-0.5,0-0.8c0-0.3,0-0.6,0-0.9c0-0.3,0-0.5,0-0.8c0-0.2,0-0.4,0-0.6c0-0.1,0-0.1,0-0.2c0-0.1,0-0.2,0-0.2
                                c0-0.1-0.1-0.2-0.1-0.2c-0.1-0.1-0.1-0.2-0.2-0.2c-0.1,0-0.1-0.1-0.2-0.1c0,0,0,0-0.1,0c-0.1,0-0.1,0-0.2,0c0,0,0,0,0,0
                                c0,0,0,0,0,0c-0.1,0-0.2,0-0.2,0c-0.2,0-0.3,0-0.5,0c-0.2,0-0.4,0-0.6,0c-0.3,0-0.5,0-0.8,0c-0.3,0-0.6,0-0.8,0
                                c-0.3,0-0.6,0-0.9,0c-0.3,0-0.6,0-0.8,0c-0.3,0-0.5,0-0.8,0c-0.2,0-0.4,0-0.7,0c-0.2,0-0.3,0-0.5,0c-0.1,0-0.2,0-0.3,0
                                c0,0,0,0-0.1,0c-0.1,0-0.2,0-0.2,0c-0.1,0-0.2,0.1-0.3,0.2c-0.1,0-0.1,0.1-0.2,0.2c0,0,0,0,0,0.1c0,0.1,0,0.1-0.1,0.2
                                c0,0.1,0,0.3,0,0.4c0,0.2,0,0.3,0,0.5c0,0.3,0,0.5,0,0.8c0,0.3,0,0.6,0,0.9c0,0.3,0,0.6,0,0.8c0,0.2,0,0.5,0,0.7
                                c0,0.1,0,0.3,0,0.4c0,0,0,0,0,0.1c0,0.1,0,0.2,0,0.2c0,0.1,0,0.1,0.1,0.2c0,0,0.1,0.1,0.1,0.1c0.1,0.1,0.1,0.1,0.2,0.2
                                c0,0,0,0,0.1,0c0.1,0,0.1,0,0.2,0.1c0.1,0,0.2,0,0.3,0c0.1,0,0.2,0,0.4,0c0.2,0,0.4,0,0.6,0c0.2,0,0.5,0,0.7,0
                                c0.3,0,0.5,0,0.8,0c0.3,0,0.6,0,0.9,0c0.3,0,0.6,0,0.9,0c0.3,0,0.5,0,0.8,0c0.2,0,0.5,0,0.7,0c0.2,0,0.4,0,0.6,0
                                c0.1,0,0.2,0,0.4,0c0,0,0.1,0,0.1,0c0.1,0,0.2,0,0.3-0.1c0.1-0.1,0.1-0.2,0.1-0.3c0-0.1,0-0.2-0.1-0.3
                                C328.1,198.4,328,198.4,327.8,198.4z" />
                    </g>
                    <g>
                        <path class="st37" d="M324.4,191c-0.1,0-0.3,0-0.4,0c-0.1,0-0.2,0-0.3,0.1c-0.2,0.1-0.5,0.2-0.7,0.4c-0.1,0.1-0.2,0.2-0.3,0.3
                                c-0.1,0.1-0.2,0.2-0.3,0.3c-0.2,0.2-0.3,0.5-0.4,0.7c-0.1,0.2-0.2,0.5-0.2,0.7c0,0.1,0,0.1,0,0.2c0,0.1,0,0.1,0,0.2
                                c0,0.1,0,0.1,0.1,0.1c0.1,0.1,0.2,0.1,0.3,0.1c0,0,0.1,0,0.1,0c0.1,0,0.2,0,0.3,0c0.2,0,0.3,0,0.5,0c0.2,0,0.4,0,0.6,0
                                c0.2,0,0.4,0,0.6,0c0.2,0,0.4,0,0.7,0c0.2,0,0.4,0,0.6,0c0.2,0,0.3,0,0.5,0c0.1,0,0.2,0,0.4,0c0.1,0,0.1,0,0.2,0c0,0,0,0,0,0
                                c0.1,0,0.1,0,0.2,0c0.1,0,0.1,0,0.1-0.1c0,0,0-0.1,0.1-0.1c0-0.1,0.1-0.1,0.1-0.2c0-0.3-0.1-0.6-0.2-0.8
                                c-0.1-0.3-0.2-0.5-0.4-0.7c-0.1-0.2-0.3-0.4-0.5-0.6c-0.1-0.1-0.2-0.2-0.4-0.3c-0.1-0.1-0.3-0.1-0.4-0.2
                                c-0.1,0-0.2-0.1-0.3-0.1c-0.1,0-0.2,0-0.3,0C324.6,191,324.6,191,324.4,191C324.5,191,324.4,191,324.4,191c-0.1,0-0.1,0-0.2,0
                                c-0.1,0-0.1,0-0.1,0.1c0,0-0.1,0.1-0.1,0.1c0,0.1,0,0.1,0,0.2c0,0,0,0.1,0,0.1c0,0.1,0.1,0.1,0.1,0.2c0.1,0.1,0.2,0.1,0.3,0.1
                                c0.1,0,0.2,0,0.3,0c0,0-0.1,0-0.1,0c0.2,0,0.3,0.1,0.5,0.1c0,0-0.1,0-0.1,0c0.2,0.1,0.3,0.2,0.5,0.3c0,0-0.1,0-0.1-0.1
                                c0.2,0.1,0.3,0.3,0.4,0.4c0,0,0-0.1-0.1-0.1c0.1,0.2,0.3,0.4,0.4,0.6c0,0,0-0.1,0-0.1c0.1,0.2,0.2,0.5,0.2,0.8c0,0,0-0.1,0-0.1
                                c0,0,0,0.1,0,0.1c0.1-0.1,0.3-0.3,0.4-0.4c0,0-0.1,0-0.1,0c-0.1,0-0.2,0-0.3,0c-0.2,0-0.3,0-0.5,0c-0.2,0-0.4,0-0.6,0
                                c-0.2,0-0.4,0-0.6,0c-0.2,0-0.4,0-0.7,0c-0.2,0-0.4,0-0.6,0c-0.2,0-0.3,0-0.5,0c-0.1,0-0.2,0-0.4,0c-0.1,0-0.1,0-0.2,0
                                c0,0,0,0,0,0c0.1,0.1,0.3,0.3,0.4,0.4c0,0,0-0.1,0-0.1c0,0,0,0.1,0,0.1c0-0.3,0.1-0.5,0.2-0.8c0,0,0,0.1,0,0.1
                                c0.1-0.2,0.2-0.4,0.4-0.6c0,0,0,0.1-0.1,0.1c0.1-0.2,0.3-0.3,0.4-0.4c0,0-0.1,0-0.1,0.1c0.1-0.1,0.3-0.2,0.5-0.3
                                c0,0-0.1,0-0.1,0c0.2-0.1,0.3-0.1,0.5-0.1c0,0-0.1,0-0.1,0c0.1,0,0.2,0,0.3,0c0.1,0,0.1,0,0.2,0c0.1,0,0.1,0,0.1-0.1
                                c0,0,0.1-0.1,0.1-0.1c0-0.1,0-0.1,0-0.2c0,0,0-0.1,0-0.1c0-0.1-0.1-0.1-0.1-0.2C324.6,191,324.5,191,324.4,191z" />
                    </g>
                    <ellipse class="st37" cx="324.4" cy="196.8" rx="0.4" ry="0.5" />
                    <circle class="st37" cx="324.4" cy="196.2" r="0.6" />
                    </g>
                    <text transform="matrix(1 0 0 1 361.7221 198.2455)" class="st37 st38 st39">Password</text>
                </g>
                <g class="st20">
                    <text transform="matrix(1 0 0 1 334.8096 257.8863)" class="st38 st39">Forgot your Password?</text>
                </g>
                <g class="st20">
                    <path class="st9" d="M397.6,235.2h-34.5c-4.6,0-8.4-3.8-8.4-8.4v0c0-4.6,3.8-8.4,8.4-8.4h34.5c4.6,0,8.4,3.8,8.4,8.4v0
                        C406,231.5,402.2,235.2,397.6,235.2z" />
                    <text transform="matrix(1 0 0 1 364.9272 229.3954)" class="st37 st38 st40">LOGIN</text>
                </g>
                </g>
                <g class="st19">
                <g class="st20">
                    <path class="st9" d="M400.3,396.5h-38c-4.3,0-7.8-3.5-7.8-7.8v0c0-4.3,3.5-7.8,7.8-7.8h38c4.3,0,7.8,3.5,7.8,7.8v0
                        C408.1,393,404.6,396.5,400.3,396.5z" />
                    <text transform="matrix(1 0 0 1 365.1413 390.7744)" class="st37 st38 st41">Sigh up</text>
                </g>
                <text transform="matrix(1 0 0 1 305.57 364.9854)" class="st20 st38 st42">Don’t you have account?</text>
                <g class="st20">
                    <g>
                    <linearGradient id="SVGID_24_" gradientUnits="userSpaceOnUse" x1="394.8925" y1="302.2716" x2="344.6528"
                        y2="358.3082">
                        <stop offset="0" style="stop-color:#FFFFFF" />
                        <stop offset="1" style="stop-color:#09B5DB" />
                    </linearGradient>
                    <path class="st43" d="M318.7,330.3l-4.3-17h2.3l2,8.6c0.5,2.1,1,4.2,1.3,5.9h0.1c0.3-1.7,0.8-3.7,1.4-5.9l2.3-8.6h2.3l2.1,8.6
                            c0.5,2,0.9,4,1.2,5.8h0.1c0.4-1.9,0.8-3.8,1.4-5.9l2.2-8.6h2.2l-4.8,17h-2.3l-2.1-8.9c-0.5-2.2-0.9-3.8-1.1-5.6h-0.1
                            c-0.3,1.7-0.7,3.4-1.3,5.6l-2.4,8.9H318.7z" />
                    <linearGradient id="SVGID_25_" gradientUnits="userSpaceOnUse" x1="394.8925" y1="302.2716" x2="344.6528"
                        y2="358.3082">
                        <stop offset="0" style="stop-color:#FFFFFF" />
                        <stop offset="1" style="stop-color:#09B5DB" />
                    </linearGradient>
                    <path class="st44" d="M346.1,322.3h-6.6v6.1h7.4v1.8h-9.6v-17h9.2v1.8h-7v5.4h6.6V322.3z" />
                    <linearGradient id="SVGID_26_" gradientUnits="userSpaceOnUse" x1="394.8925" y1="302.2716" x2="344.6528"
                        y2="358.3082">
                        <stop offset="0" style="stop-color:#FFFFFF" />
                        <stop offset="1" style="stop-color:#09B5DB" />
                    </linearGradient>
                    <path class="st45" d="M349.7,313.3h2.2v15.2h7.3v1.8h-9.5V313.3z" />
                    <linearGradient id="SVGID_27_" gradientUnits="userSpaceOnUse" x1="394.8925" y1="302.2716" x2="344.6528"
                        y2="358.3082">
                        <stop offset="0" style="stop-color:#FFFFFF" />
                        <stop offset="1" style="stop-color:#09B5DB" />
                    </linearGradient>
                    <path class="st46" d="M373.6,329.7c-0.8,0.4-2.4,0.8-4.5,0.8c-4.8,0-8.4-3-8.4-8.6c0-5.3,3.6-8.9,8.9-8.9c2.1,0,3.5,0.5,4,0.8
                            l-0.5,1.8c-0.8-0.4-2-0.7-3.4-0.7c-4,0-6.6,2.6-6.6,7c0,4.2,2.4,6.8,6.5,6.8c1.3,0,2.7-0.3,3.6-0.7L373.6,329.7z" />
                    <linearGradient id="SVGID_28_" gradientUnits="userSpaceOnUse" x1="394.8925" y1="302.2716" x2="344.6528"
                        y2="358.3082">
                        <stop offset="0" style="stop-color:#FFFFFF" />
                        <stop offset="1" style="stop-color:#09B5DB" />
                    </linearGradient>
                    <path class="st47" d="M390.9,321.6c0,5.9-3.6,9-7.9,9c-4.5,0-7.7-3.5-7.7-8.6c0-5.4,3.4-8.9,7.9-8.9
                            C387.9,313,390.9,316.6,390.9,321.6z M377.7,321.9c0,3.6,2,6.9,5.4,6.9c3.5,0,5.5-3.2,5.5-7.1c0-3.4-1.8-6.9-5.4-6.9
                            C379.5,314.8,377.7,318.1,377.7,321.9z" />
                    <linearGradient id="SVGID_29_" gradientUnits="userSpaceOnUse" x1="394.8925" y1="302.2716" x2="344.6528"
                        y2="358.3082">
                        <stop offset="0" style="stop-color:#FFFFFF" />
                        <stop offset="1" style="stop-color:#09B5DB" />
                    </linearGradient>
                    <path class="st48" d="M408.1,322.8c-0.1-2.4-0.3-5.2-0.3-7.3h-0.1c-0.6,2-1.3,4.1-2.1,6.5l-3,8.3h-1.7l-2.8-8.1
                            c-0.8-2.4-1.5-4.6-2-6.6h-0.1c-0.1,2.1-0.2,5-0.3,7.5l-0.5,7.3h-2.1l1.2-17h2.8l2.9,8.2c0.7,2.1,1.3,4,1.7,5.7h0.1
                            c0.4-1.7,1-3.6,1.8-5.7l3-8.2h2.8l1.1,17h-2.1L408.1,322.8z" />
                    <linearGradient id="SVGID_30_" gradientUnits="userSpaceOnUse" x1="394.8925" y1="302.2716" x2="344.6528"
                        y2="358.3082">
                        <stop offset="0" style="stop-color:#FFFFFF" />
                        <stop offset="1" style="stop-color:#09B5DB" />
                    </linearGradient>
                    <path class="st49" d="M422.8,322.3h-6.6v6.1h7.4v1.8H414v-17h9.2v1.8h-7v5.4h6.6V322.3z" />
                    </g>
                    <text transform="matrix(1 0 0 1 314.0331 330.2924)" class="st9 st50 st51">WELCOME</text>
                </g>
                </g>
            </g>
        </svg>
        <div class="login-box">
            <div class="login-logo">
                <a href="{{route('admin_home')}}"><b>{{settings('site_name')}}</b></a>
            </div>
            <!-- /.login-logo -->
            <div class="card">
                <div class="card-body login-card-body">
                    <p class="login-box-msg">{{settings('site_name')}} - {{awtTrans('تسجيل الدخول')}}</p>

                    @include('msg')

                    <form action="" method="post" id="formLogin">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="email" name="email" class="form-control" placeholder="{{awtTrans('البريد الإلكتروني')}}">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" name="password" class="form-control" placeholder="{{awtTrans('كلمة المرور')}}">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-success btn-block login" onclick="login()">{{awtTrans('دخول')}}</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>

                </div>
                <!-- /.login-card-body -->
            </div>
        </div>
        <!-- /.login-box -->

        <!-- jQuery -->
        <script src="{{dashboard_path()}}/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="{{dashboard_path()}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="{{dashboard_path()}}/dist/js/adminlte.min.js"></script>

        <!-- Notify Js -->
        <script src="{{url('/')}}/public/notify.js"></script>

        <script>
            // Notify Js
            var type = $('#alertType').val();
            if (type != '0') {
                var theme = $('#alertTheme').val();
                var message = $('#alertMessage').val();
                $.notify(message, theme);
            }

            function login() {
                event.preventDefault();
                $.ajax({
                    type        : 'POST',
                    url         : '{{ route('admin_post_login') }}' ,
                    datatype    : 'json' ,
                    async       : false,
                    processData : false,
                    contentType : false,
                    data        : new FormData($("#formLogin")[0]),
                    success     : function(msg){
                        if(msg.value == '0'){
                            $('.login').notify(
                                msg.msg, {
                                    position: "bottom"
                                }
                            );
                        }else{
                            window.location.assign('{{route('admin_home')}}');
                        }
                    }
                });
            }
        </script>
    </body>
</html>
