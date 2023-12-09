<head>
    Vuln!!
    <title>Touched BY M</title>
    <link rel="icon" type="image/jpeg" href="https://avatars.githubusercontent.com/u/52845610" />
</head>

<style>
    * {
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        -o-user-select: none;
        user-select: none;
    }

    body {
        margin: 0;
        background: #000;
        color: #FFF;
        font-family: Arial, Helvetica, sans-serif;
        overflow: hidden;
        height: 500px;
    }

    div {
        position: absolute;
    }

    #container {
        height: 300px;
        width: 400px;
        margin-top: -150px;
        margin-left: -200px;
        top: 50%;
        left: 50%;
        -webkit-perspective: 700;
        -moz-perspective: 700px;
        -webkit-animation: start 1s linear;
        overflow: hidden;
        z-index: 20;
    }

    @-webkit-keyframes start {
        from {
            -webkit-transform: scale(0);
        }

        to {
            -webkit-transform: scale(1);
        }
    }

    #a1 {
        top: 4px;
        left: 20px;
        height: 4px;
        width: 70px;
        border: 1px dotted #FFF;
    }

    #a11 {
        left: 0;
        top: 0;
        height: 100%;
        background: #FFF;
        -webkit-animation: a11 4s ease-in-out infinite;
        -moz-animation: a11 4s ease-in-out infinite;
    }

    .MRHRTZ {
        background: black;
    }

    @-webkit-keyframes a11 {
        from {
            width: 70%;
        }

        10% {
            width: 20%;
        }

        20% {
            width: 90%;
        }

        30% {
            width: 60%;
        }

        40% {
            width: 100%;
        }

        50% {
            width: 10%;
        }

        60% {
            width: 30%;
        }

        70% {
            width: 20%;
        }

        80% {
            width: 50%;
        }

        90% {
            width: 10%;
        }

        to {
            width: 70%;
        }
    }

    @-moz-keyframes a11 {
        from {
            width: 70%;
        }

        10% {
            width: 20%;
        }

        20% {
            width: 90%;
        }

        30% {
            width: 60%;
        }

        40% {
            width: 100%;
        }

        50% {
            width: 10%;
        }

        60% {
            width: 30%;
        }

        70% {
            width: 20%;
        }

        80% {
            width: 50%;
        }

        90% {
            width: 10%;
        }

        to {
            width: 70%;
        }
    }

    #a2 {
        top: 18px;
        left: 50px;
        height: 30px;
        width: 30px;
        border-radius: 50%;
        border: 1px dashed #FFF;
    }

    #a21 {
        top: 8px;
        left: 13px;
        height: 14px;
        width: 4px;
        background: #FFF;
        border-radius: 3px;
        -webkit-animation: a21 8s linear infinite;
        -moz-animation: a21 8s linear infinite;
    }

    @-webkit-keyframes a21 {
        from {
            -webkit-transform: rotateZ(0deg) translateY(50%);
        }

        to {
            -webkit-transform: rotateZ(360deg) translateY(50%);
        }
    }

    @-moz-keyframes a21 {
        from {
            -moz-transform: rotateZ(0deg) translateY(50%);
        }

        to {
            -moz-transform: rotateZ(360deg) translateY(50%);
        }
    }

    #a3 {
        top: 20px;
        left: 20px;
        height: 200px;
        width: 20px;
        font-size: 50%;
    }

    #a3 span {
        display: block;
        margin-bottom: 10px;
        text-shadow: 0 0 1px #FFF;
    }

    @-webkit-keyframes a3 {
        from {
            opacity: 0;
        }

        50% {
            opacity: 1;
        }

        to {
            opacity: 0;
        }
    }

    @-moz-keyframes a3 {
        from {
            opacity: 0;
        }

        50% {
            opacity: 1;
        }

        to {
            opacity: 0;
        }
    }

    #a4 {
        top: 60px;
        height: 150px;
        width: 14px;
    }

    #a4 span {
        display: block;
        height: 2px;
        width: 100%;
        background: #FFF;
        margin-bottom: 3px;
    }

    #a5 {
        height: 30px;
        width: 400px;
        bottom: 0;
        overflow: hidden;
        border-top: 1px solid #FFF;
    }

    #a5 span {
        display: block;
        position: relative;
        float: left;
        height: 30px;
        width: 24px;
        border-right: 1px solid #FFF;
    }

    #a5 span:first-child {
        margin-left: 12px;
        border-left: 1px solid #FFF;
    }

    #a5 span b {
        position: absolute;
        top: 2px;
        left: 2px;
        right: 2px;
        bottom: 2px;
        background: #FFF;
        opacity: 0;
        -webkit-animation: a4 2s linear infinite;
        -moz-animation: a4 2s linear infinite;
    }

    @-webkit-keyframes a4 {
        from {
            opacity: 0;
        }

        50% {
            opacity: 1;
        }

        to {
            opacity: 0;
        }
    }

    @-moz-keyframes a4 {
        from {
            opacity: 0;
        }

        50% {
            opacity: 1;
        }

        to {
            opacity: 0;
        }
    }

    #a6 {
        text-transform: uppercase;
        left: 90px;
        top: 0;
        width: 220px;
        padding: 2px 0 2px 0;
        font-size: 75%;
        text-align: center;
        color: white;
    }

    #a7 {
        top: 5px;
        right: 10px;
        width: 80px;
        text-align: right;
    }

    #a7 span {
        display: block;
    }

    #a7 span b {
        font-weight: normal;
        margin-left: -4px;
        text-shadow: 0 0 1px #FFF;
    }

    #a71 {
        font-size: 40%;
    }

    #a72 {
        font-size: 50%;
    }

    #a73 {
        font-size: 100%;
    }

    #a74 {
        font-size: 80%;
    }

    #a75 {
        font-size: 50%;
    }

    #a76 {
        font-size: 40%;
    }

    #a8 {
        top: 80px;
        right: 7px;
        height: 160px;
        width: 50px;
        border-bottom: 2px solid #FFF;
    }

    #a8 span {
        display: block;
        margin-left: 10%;
        width: 80%;
        height: 1px;
        background: #FFF;
        margin-bottom: 3px;
    }

    #a81 {
        top: 0;
        width: 100%;
        background: #FFF;
        -webkit-animation: a81 2s ease-in-out infinite;
        -moz-animation: a81 2s ease-in-out infinite;
    }

    @-webkit-keyframes a81 {
        from {
            height: 0;
        }

        20% {
            height: 50px;
        }

        40% {
            height: 10px;
        }

        60% {
            height: 120px;
        }

        80% {
            height: 70px;
        }

        to {
            height: 0;
        }
    }

    @-moz-keyframes a81 {
        from {
            height: 0;
        }

        20% {
            height: 50px;
        }

        40% {
            height: 10px;
        }

        60% {
            height: 120px;
        }

        80% {
            height: 70px;
        }

        to {
            height: 0;
        }
    }

    #a9 {
        bottom: 37px;
        right: 7px;
        font-size: 80%;
        text-align: right;
        color: white;
    }

    #a9 span {
        margin-left: -4px;
    }

    #a10 {
        width: 200px;
        bottom: 56px;
        right: 70px;
        font-size: 40%;
        text-align: right;
    }

    #a10 span {
        position: absolute;
        top: 1px;
        height: 60%;
        width: 100px;
        background: black;
        right: 60px;
        -webkit-animation: a10 2s ease-in-out infinite;
        -moz-animation: a10 2s ease-in-out infinite;
    }

    @-webkit-keyframes a10 {
        from {
            width: 100px;
        }

        20% {
            width: 10px;
        }

        40% {
            width: 140px;
        }

        60% {
            width: 50px;
        }

        80% {
            width: 120px;
        }

        to {
            width: 100px;
        }
    }

    @-moz-keyframes a10 {
        from {
            width: 100px;
        }

        20% {
            width: 10px;
        }

        40% {
            width: 140px;
        }

        60% {
            width: 50px;
        }

        80% {
            width: 120px;
        }

        to {
            width: 100px;
        }
    }

    #b1 {
        bottom: 32px;
        width: 100px;
        height: 50px;
        left: 10px;
    }

    #b1 span {
        position: absolute;
        bottom: 0;
        height: 50px;
        width: 7px;
        background: black;
    }

    .b110 {
        right: 5px;
        -webkit-animation: b1 1s ease-in-out infinite;
        -moz-animation: b1 1s ease-in-out infinite;
    }

    .b19 {
        right: 15px;
        -webkit-animation: b1 2s ease-in-out infinite;
        -moz-animation: b1 2s ease-in-out infinite;
    }

    .b18 {
        right: 25px;
        -webkit-animation: b1 1.5s ease-in-out infinite;
        -moz-animation: b1 1.5s ease-in-out infinite;
    }

    .b17 {
        right: 35px;
        -webkit-animation: b1 1.8s ease-in-out infinite;
        -moz-animation: b1 1.8s ease-in-out infinite;
    }

    .b16 {
        right: 45px;
        -webkit-animation: b1 1.1s ease-in-out infinite;
        -moz-animation: b1 1.1s ease-in-out infinite;
    }

    .b15 {
        right: 55px;
        -webkit-animation: b1 1.7s ease-in-out infinite;
        -moz-animation: b1 1.7s ease-in-out infinite;
    }

    .b14 {
        right: 65px;
        -webkit-animation: b1 1.2s ease-in-out infinite;
        -moz-animation: b1 1.2s ease-in-out infinite;
    }

    .b13 {
        right: 75px;
        -webkit-animation: b1 1.6s ease-in-out infinite;
        -moz-animation: b1 1.6s ease-in-out infinite;
    }

    .b12 {
        right: 85px;
        -webkit-animation: b1 1.3s ease-in-out infinite;
        -moz-animation: b1 1.3s ease-in-out infinite;
    }

    .b11 {
        right: 95px;
        -webkit-animation: b1 2s ease-in-out infinite;
        -moz-animation: b1 2s ease-in-out infinite;
    }

    @-webkit-keyframes b1 {
        from {
            height: 50px;
        }

        20% {
            height: 10px;
        }

        40% {
            height: 30px;
        }

        60% {
            height: 5px;
        }

        80% {
            height: 20px;
        }

        to {
            height: 50px;
        }
    }

    @-moz-keyframes b1 {
        from {
            height: 50px;
        }

        20% {
            height: 10px;
        }

        40% {
            height: 30px;
        }

        60% {
            height: 5px;
        }

        80% {
            height: 20px;
        }

        to {
            height: 50px;
        }
    }

    #figure {
        top: 40px;
        left: 130px;
        height: 170px;
        width: 170px;
        border-radius: 5px;
        -webkit-transform: rotateY(-30deg) rotateX(10deg);
        -webkit-transform-style: preserve-3d;
        -webkit-animation: figure 8s ease-in-out infinite;
        -moz-transform: rotateY(-30deg) rotateX(10deg);
        -moz-transform-style: preserve-3d;
        -moz-animation: figure 8s ease-in-out infinite;
    }

    @-webkit-keyframes figure {
        from {
            -webkit-transform: rotateY(-30deg) rotateX(30deg);
        }

        20% {
            -webkit-transform: rotateY(30deg) rotateX(30deg);
        }

        40% {
            -webkit-transform: rotateY(30deg) rotateX(-30deg);
        }

        60% {
            -webkit-transform: rotateY(-10deg) rotateX(30deg);
        }

        80% {
            -webkit-transform: rotateY(30deg) rotateX(-10deg);
        }

        to {
            -webkit-transform: rotateY(-30deg) rotateX(30deg);
        }
    }

    @-moz-keyframes figure {
        from {
            -moz-transform: rotateY(-30deg) rotateX(30deg);
        }

        20% {
            -moz-transform: rotateY(30deg) rotateX(30deg);
        }

        40% {
            -moz-transform: rotateY(30deg) rotateX(-30deg);
        }

        60% {
            -moz-transform: rotateY(-10deg) rotateX(30deg);
        }

        80% {
            -moz-transform: rotateY(30deg) rotateX(-10deg);
        }

        to {
            -moz-transform: rotateY(-30deg) rotateX(30deg);
        }
    }

    #figure #a7 {
        left: -100px;
        top: 20px;
        color: #03F;
        -webkit-transform: scale(0.7);
        -webkit-animation: fa7 2s ease-in-out infinite;
    }

    @-webkit-keyframes fa7 {
        from {
            color: #03F;
        }

        25% {
            color: rgb(0, 204, 41);
        }

        50% {
            color: #0CF;
        }

        75% {
            color: rgb(204, 0, 0);
        }

        to {
            color: #03F;
        }
    }

    #figure div,
    #figure span {
        -webkit-transform-style: preserve-3d;
    }

    #f1 {
        left: -2px;
        top: -2px;
        height: 170px;
        width: 170px;
        border-radius: 50%;
        border-width: 2px;
        border-style: solid;
        box-shadow: 0 0 5px #006;
        -webkit-animation: f1 4s ease-in-out infinite;
    }

    @-webkit-keyframes f1 {
        from {
            -webkit-transform: rotateZ(0deg);
            opacity: 1.0;
            border-color: #006;
        }

        10% {
            -webkit-transform: rotateZ(30deg);
            opacity: 1.0;
            border-color: #06F;
        }

        20% {
            -webkit-transform: rotateZ(-30deg);
            opacity: 0;
            border-color: rgb(2, 255, 52);
        }

        30% {
            -webkit-transform: rotateZ(0deg);
            opacity: 1.0;
            border-color: rgb(2, 255, 52);
        }

        40% {
            -webkit-transform: rotateZ(-60deg);
            opacity: 1.0;
            border-color: #006;
        }

        50% {
            -webkit-transform: rotateZ(-40deg);
            opacity: 1.0;
            border-color: rgb(204, 0, 0);
        }

        60% {
            -webkit-transform: rotateZ(-100deg);
            opacity: 0;
            border-color: rgb(2, 255, 52);
        }

        70% {
            -webkit-transform: rotateZ(-150deg);
            opacity: 1.0;
            border-color: rgb(113, 0, 0);
        }

        80% {
            -webkit-transform: rotateZ(100deg);
            opacity: 0;
            border-color: rgb(255, 14, 14);
        }

        90% {
            -webkit-transform: rotateZ(30deg);
            opacity: 1.0;
            border-color: #099;
        }

        to {
            -webkit-transform: rotateZ(0deg);
            opacity: 1.0;
            border-color: #006;
        }
    }

    #f1 span {
        display: block;
        position: absolute;
        top: 50%;
        left: 50%;
        margin-top: -5px;
        height: 10px;
        width: 3px;
        background: #006;
        box-shadow: 0 0 5px #006;
        -webkit-animation: f1div 4s ease-in-out infinite;
    }

    @-webkit-keyframes f1div {
        from {
            background: #006;
        }

        10% {
            background: #06F;
        }

        20% {
            background: rgb(2, 255, 52);
        }

        30% {
            background: rgb(2, 255, 52);
        }

        40% {
            background: #006;
        }

        50% {
            background: rgb(204, 0, 0);
        }

        60% {
            background: #03C;
        }

        70% {
            background: rgb(113, 0, 0);
        }

        80% {
            background: rgb(255, 14, 14);
        }

        90% {
            background: #099;
        }

        to {
            background: #006;
        }
    }


    #f2 {
        height: 170px;
        width: 170px;
        -webkit-animation: f2 20s linear infinite;
    }

    @-webkit-keyframes f2 {
        from {
            -webkit-transform: translateZ(-5px) rotateZ(0deg);
        }

        to {
            -webkit-transform: translateZ(-5px) rotateZ(360deg);
        }
    }

    #f2 span {
        display: block;
        position: absolute;
        top: 50%;
        left: 50%;
        margin-top: -3px;
        height: 6px;
        width: 2px;
        background: black;
    }

    #f3 {
        top: 10px;
        left: 10px;
        height: 130px;
        width: 130px;
        border-radius: 50%;
        border-width: 10px;
        border-style: solid;
        border-color: rgb(0, 255, 89);
        box-shadow: 0 0 5px #03C;
        -webkit-transform: translateZ(10px);
        -webkit-animation: f3 6s ease-in-out infinite;
    }

    @-webkit-keyframes f3 {
        from {
            -webkit-transform: translateZ(10px) rotateZ(0deg);
            border-color: #03C;
            opacity: 1.0;
        }

        10% {
            -webkit-transform: translateZ(10px) rotateZ(-80deg);
            border-color: rgb(204, 0, 0);
            opacity: 1.0;
        }

        20% {
            -webkit-transform: translateZ(10px) rotateZ(-60deg);
            border-color: #03C;
            opacity: 0;
        }

        30% {
            -webkit-transform: translateZ(10px) rotateZ(-200deg);
            border-color: rgb(2, 255, 52);
            opacity: 1.0;
        }

        40% {
            -webkit-transform: translateZ(10px) rotateZ(-210deg);
            border-color: #00F;
            opacity: 1.0;
        }

        50% {
            -webkit-transform: translateZ(10px) rotateZ(-120deg);
            border-color: #069;
            opacity: 1.0;
        }

        60% {
            -webkit-transform: translateZ(10px) rotateZ(-100deg);
            border-color: #03C;
            opacity: 0.0;
        }

        70% {
            -webkit-transform: translateZ(10px) rotateZ(-30deg);
            border-color: rgb(204, 0, 0);
            opacity: 1.0;
        }

        80% {
            -webkit-transform: translateZ(10px) rotateZ(0deg);
            border-color: rgb(204, 0, 0);
            opacity: 1.0;
        }

        90% {
            -webkit-transform: translateZ(10px) rotateZ(90deg);
            border-color: #03C;
            opacity: 1.0;
        }

        to {
            -webkit-transform: translateZ(10px) rotateZ(0deg);
            border-color: rgb(0, 204, 41);
            opacity: 1.0;
        }
    }

    #f31 {
        width: 40px;
        background: #000;
        top: -13px;
        left: 45px;
        bottom: -13px;
    }

    #f31 span {
        left: 12px;
        position: absolute;
        display: block;
        border: 1px solid #03C;
        height: 14px;
        width: 14px;
        border-radius: 100%;
        -webkit-transform: translateZ(2px);
    }

    .f312 {
        bottom: 0;
    }

    #f31 span b {
        top: 3px;
        left: 3px;
        position: absolute;
        height: 8px;
        width: 8px;
        background: #03C;
        border-radius: 100%;
        -webkit-animation: f31span 2s ease-in-out infinite;
    }

    @-webkit-keyframes f31span {

        from {
            background: #03C;
            opacity: 1;
        }

        10% {
            background: rgb(0, 204, 41);
            opacity: 0;
        }

        25% {
            background: rgb(0, 204, 41);
            opacity: 1;
        }

        50% {
            background: #0CC;
            opacity: 1;
        }

        75% {
            background: rgb(204, 0, 0);
            opacity: 1;
        }

        90% {
            background: rgb(0, 204, 41);
            opacity: 0;
        }

        to {
            background: #03C;
            opacity: 1;
        }
    }

    #f32 {
        height: 40px;
        background: #000;
        top: 45px;
        left: -15px;
        right: -15px;
    }

    #f32 span {
        position: absolute;
        display: block;
        border: 1px solid #009;
        border-radius: 50%;
        height: 6px;
        width: 6px;
        top: 15px;
        -webkit-transform: translateZ(2px);
    }

    .f321 {
        left: 6px;
    }

    .f322 {
        right: 6px;
    }

    #f33 {
        width: 2px;
        background: #000;
        top: -10px;
        left: 64px;
        bottom: -10px;
        -webkit-transform: translateZ(1px) rotateZ(45deg);
    }

    #f34 {
        width: 2px;
        background: #000;
        top: -10px;
        left: 64px;
        bottom: -10px;
        -webkit-transform: translateZ(1px) rotateZ(-45deg);
    }

    #f4 {
        top: 33px;
        left: 33px;
        height: 100px;
        width: 100px;
        border: 2px solid #09F;
        border-radius: 100%;
        -webkit-transform: translateZ(20px);
        -webkit-animation: f4 6s ease-in-out infinite;
    }

    @-webkit-keyframes f4 {
        from {
            -webkit-transform: translateZ(20px) rotateZ(0);
            opacity: 1;
        }

        25% {
            -webkit-transform: translateZ(20px) rotateZ(120deg);
            opacity: 1;
        }

        50% {
            -webkit-transform: translateZ(20px) rotateZ(0);
            opacity: 0;
        }

        75% {
            -webkit-transform: translateZ(20px) rotateZ(-120deg);
            opacity: 1;
        }

        to {
            -webkit-transform: translateZ(20px) rotateZ(0);
            opacity: 1;
        }
    }

    #f41 {
        left: 45px;
        top: -3px;
        bottom: -3px;
        width: 10px;
        background: #FFF;
        -webkit-transform: translateZ(1px);
    }

    #f42 {
        top: 45px;
        left: -3px;
        right: -3px;
        height: 10px;
        background: #FFF;
        -webkit-transform: translateZ(1px);
    }

    #f43 {
        top: 47px;
        left: 49px;
        height: 6px;
        width: 2px;
        background: rgb(255, 255, 255);
    }

    .f431 {
        -webkit-transform: rotateZ(45deg) translateY(55px);
    }

    .f432 {
        -webkit-transform: rotateZ(-45deg) translateY(55px);
    }

    .f433 {
        -webkit-transform: rotateZ(135deg) translateY(55px);
    }

    .f434 {
        -webkit-transform: rotateZ(225deg) translateY(55px);
    }

    #f5 {
        left: 45px;
        top: 45px;
        height: 80px;
        width: 80px;
        -webkit-animation: f5 20s linear infinite;
    }

    @-webkit-keyframes f5 {
        from {
            -webkit-transform: translateZ(25px) rotateZ(360deg);
        }

        to {
            -webkit-transform: translateZ(25px) rotateZ(0deg);
        }
    }

    #f5 span {
        display: block;
        position: absolute;
        top: 50%;
        left: 50%;
        margin-top: -2px;
        height: 4px;
        width: 1px;
        background: black;
        font-size: 30%;
    }

    #f5 span b {
        font-weight: normal;
        position: absolute;
        bottom: 150%;
        width: 5px;
        left: -2px;
        overflow: hidden;
    }

    #f6 {
        top: 61px;
        left: 61px;
        height: 46px;
        width: 46px;
        border-radius: 50%;
        border: 1px solid #06F;
        -webkit-transform: translateZ(30px);
    }

    #f7 {
        top: 65px;
        left: 65px;
        height: 36px;
        width: 36px;
        border-radius: 50%;
        border: 2px solid #06F;
        background: #000;
        -webkit-transform: translateZ(34px);
        -webkit-animation: f7 6s linear infinite;
    }

    @-webkit-keyframes f7 {
        from {
            -webkit-transform: translateZ(34px) rotateZ(0deg);
            opacity: 1;
        }

        10% {
            -webkit-transform: translateZ(34px) rotateZ(36deg);
            opacity: 0;
        }

        20% {
            -webkit-transform: translateZ(34px) rotateZ(72deg);
            opacity: 1;
        }

        70% {
            -webkit-transform: translateZ(34px) rotateZ(252deg);
            opacity: 1;
        }

        80% {
            -webkit-transform: translateZ(34px) rotateZ(288deg);
            opacity: 0;
        }

        90% {
            -webkit-transform: translateZ(34px) rotateZ(324deg);
            opacity: 1;
        }

        to {
            -webkit-transform: translateZ(34px) rotateZ(360deg);
        }
    }

    #f71 {
        top: -12px;
        left: 17px;
        height: 60px;
        width: 2px;
        background: #06F;
        -webkit-transform: translateZ(-1px);
    }

    #f72 {
        top: -12px;
        left: 17px;
        height: 60px;
        width: 2px;
        background: #06F;
        -webkit-transform: translateZ(-1px) rotateZ(90deg);
    }

    #f8 {
        top: 69px;
        left: 69px;
        height: 30px;
        width: 30px;
        border-radius: 50%;
        border: 1px solid #009;
        background: #000;
        -webkit-transform: translateZ(40px);
        -webkit-animation: f8 8s linear infinite;
    }

    @-webkit-keyframes f8 {
        from {
            -webkit-transform: translateZ(40px) rotateZ(360deg);
            border-color: #009;
            opacity: 1;
        }

        10% {
            -webkit-transform: translateZ(40px) rotateZ(324deg);
            border-color: #009;
            opacity: 0;
        }

        20% {
            -webkit-transform: translateZ(40px) rotateZ(288deg);
            border-color: #009;
            opacity: 1;
        }

        50% {
            -webkit-transform: translateZ(40px) rotateZ(180deg);
            border-color: #09F;
        }

        to {
            -webkit-transform: translateZ(40px) rotateZ(0deg);
            border-color: #009;
        }
    }

    #f81 {
        top: -10px;
        left: 10px;
        height: 50px;
        width: 10px;
        background: #009;
        -webkit-transform: translateZ(-1px);
        border-radius: 5px;
        -webkit-animation: f8div 8s linear infinite;
    }

    #f82 {
        top: -10px;
        left: 10px;
        height: 50px;
        width: 10px;
        background: #009;
        -webkit-transform: translateZ(-1px) rotateZ(90deg);
        border-radius: 5px;
        -webkit-animation: f8div 8s linear infinite;
    }

    @-webkit-keyframes f8div {
        from {
            background: #009;
        }

        25% {
            background: rgb(2, 255, 52);
        }

        50% {
            background: #09F;
        }

        75% {
            background: rgb(255, 2, 2);
        }

        to {
            background: #009;
        }
    }

    #f9 {
        top: 79px;
        left: 79px;
        height: 10px;
        width: 10px;
        border-radius: 50%;
        border: 1px solid #06F;
        -webkit-transform: translateZ(50px);
    }

    #f9 span {
        top: 3px;
        left: 3px;
        position: absolute;
        display: block;
        height: 4px;
        width: 4px;
        background: #06F;
        border-radius: 50%;
        -webkit-transform: translateZ(1px);
    }

    @keyframes move_wave {
        0% {
            transform: translateX(0) translateZ(0) scaleY(1)
        }

        50% {
            transform: translateX(-25%) translateZ(0) scaleY(0.55)
        }

        100% {
            transform: translateX(-50%) translateZ(0) scaleY(1)
        }
    }

    .waveWrapper {
        overflow: hidden;
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        top: 0;
        margin: auto;
    }

    .waveWrapperInner {
        position: absolute;
        width: 100%;
        overflow: hidden;
        height: 100%;
        bottom: -1px;
        background-image: linear-gradient(to top, #86377b 20%, #27273c 80%);
    }

    .bgTop {
        z-index: 15;
        opacity: 0.5;
    }

    .bgMiddle {
        z-index: 10;
        opacity: 0.75;
    }

    .bgBottom {
        z-index: 5;
    }

    .wave {
        position: absolute;
        left: 0;
        width: 200%;
        height: 100%;
        background-repeat: repeat no-repeat;
        background-position: 0 bottom;
        transform-origin: center bottom;
    }

    .waveTop {
        background-size: 50% 100px;
    }

    .waveAnimation .waveTop {
        animation: move-wave 3s;
        -webkit-animation: move-wave 3s;
        -webkit-animation-delay: 1s;
        animation-delay: 1s;
    }

    .waveMiddle {
        background-size: 50% 120px;
    }

    .waveAnimation .waveMiddle {
        animation: move_wave 10s linear infinite;
    }

    .waveBottom {
        background-size: 50% 100px;
    }

    .waveAnimation .waveBottom {
        animation: move_wave 15s linear infinite;
    }
</style>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {

        var i = 0;
        var a3 = $('#a3');
        var a4 = $('#a4');
        var a5 = $('#a5');
        var a8 = $('#a8');
        var f2 = $('#f2');
        var f1 = $('#f1');
        var f5 = $('#f5');

        for (i = 1; i < 11; i++) {
            a3.append('<span class=a3' + i + '></span>');
            $('.a3' + i + '').css({
                '-webkit-animation': 'a3 1s ' + (Math.random() * 2) + 's  infinite',
                '-moz-animation': 'a3 1s ' + (Math.random() * 2) + 's  infinite'
            });
        }
        setInterval(function () {
            $('#a3 span').each(function () {
                $(this).text(Math.ceil(Math.random() * 999));;
            });
        }, 100);

        for (i = 1; i < 31; i++) {
            a4.append('<span class=a3' + i + '></span>');
            setInterval(function () {
                $('#a4 span').each(function () {
                    $(this).width((Math.random() * 15));
                });
            }, 500);
        }

        for (i = 1; i < 16; i++) {
            a5.append('<span><b class=a5' + i + '></b></span>');
            $('.a5' + i + '').css({
                '-webkit-animation': 'a3 1s 0.' + i + 's  infinite',
                '-moz-animation': 'a3 1s 0.' + i + 's  infinite'
            });
        }

        setInterval(function () {
            var h = Math.ceil(Math.random() * 24);
            var m = Math.ceil(Math.random() * 60);
            if (h < 10) { $('#figure .a731').text('0' + h + ':'); }
            else { $('#figure .a731').text(h + ':'); }
            if (m < 10) { $('#figure .a732').text('0' + m); }
            else { $('#figure .a732').text(m); }
        }, 100);

        setInterval(function () {
            var d = Math.ceil(Math.random() * 30);
            var m = Math.ceil(Math.random() * 12);
            var min = 1700, max = 1999;
            var rand = min - 0.5 + Math.random() * (max - min + 1)
            rand = Math.round(rand);

            if (d < 10) { $('#figure .a741').text('0' + d + '/'); }
            else { $('#figure .a741').text(d + '/'); }
            if (m < 10) { $('#figure .a742').text('0' + m + '/'); }
            else { $('#figure .a742').text(m + '/'); }
            $('#figure .a743').text(rand);
        }, 50);

        for (i = 1; i < 41; i++) {
            a8.append('<span></span>');
        }

        setInterval(function () {
            var mino = 10000, maxo = 99999;
            var rand = mino - 0.5 + Math.random() * (maxo - mino + 1);
            rand = Math.round(rand);

            var mine = 100000000, maxe = 999999999;
            var ran = mine - 0.5 + Math.random() * (maxe - mine + 1);
            ran = Math.round(ran);

            $('#a9 span:odd').text(rand);
            $('#a9 span:even').text(ran);

        }, 100);


        for (i = 1; i < 37; i++) {
            f2.append('<span class=f2' + i + '></span>');
            $('.f2' + i + '').css({
                '-webkit-transform': 'rotateZ(' + i + '0deg) translateY(95px)'
            });
        }

        for (i = 1; i < 19; i++) {
            f5.append('<span class=f5' + i + '><b>' + Math.random() * 30 + '</b></span>');
            $('.f5' + i + '').css({
                '-webkit-transform': 'rotateZ(' + i * 2 + '0deg) translateY(40px)'
            });
        }

        for (i = 1; i < 13; i++) {
            f1.append('<span class=f1' + i + '></span>');
            $('.f1' + i + '').css({
                '-webkit-transform': 'rotateZ(' + i * 30 + 'deg) translateY(91px)'
            });
        }


        const startTime = () => {
            var mydate = new Date()
            var year = mydate.getYear()

            if (year < 1000)
                year += 1900

            var day = mydate.getDay() // Current Day of week - 2
            var month = mydate.getMonth()
            var h = mydate.getHours();
            var m = mydate.getMinutes();
            var s = mydate.getSeconds();

            $('.a731#hour').text(h + ':');
            $('.a732#minute').text(m + ':');
            $('.a733#second').text(s);

            $('.a741#day').text(day + '/');
            $('.a742#month').text(month + '/');
            $('.a743#year').text(year);
        }


        setInterval(() => {
            startTime()
        }, 100);
    })
</script>
<div class="waveWrapper waveAnimation">
    <div class="waveWrapperInner bgTop">
        <div class="wave waveTop" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-top.png')">
        </div>
    </div>
    <div class="waveWrapperInner bgMiddle">
        <div class="wave waveMiddle" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-mid.png')">
        </div>
    </div>
    <div class="waveWrapperInner bgBottom">
        <div class="wave waveBottom" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-bot.png')">
        </div>
    </div>
</div>
<div id="container">
    <div id="a1">
        <div id="a11"></div>
    </div>
    <div id="a2">
        <div id="a21"></div>
    </div>
    <div id="a3"></div>
    <div id="a4"></div>
    <div id="a5"></div>
    <div id="a6">Pwned???</div>
    <div id="a7">
        <span id="a71">display lens.</span>
        <span id="a73">
            <b id="hour" class="a731"></b>
            <b id="minute" class="a732"></b>
            <b id="second" class="a733"></b>
        </span>
        <span id="a74">
            <b id="day" class="a741">/</b>
            <b id="month" class="a742">/</b>
            <b id="year" class="a743"></b>
        </span>
        <span id="a76">Zeus xz</span>
    </div>
    <div id="a8">
        <div id="a81"></div>
    </div>
    <div id="a9">
        <span>548621</span>:
        <span>034566334</span>.
        <span>8235</span>:
        <span>1632623366</span>&nbsp;
        <span>4415662</span>
    </div>
    <div id="a10">
        Tachyons
        <span></span>
    </div>
    <div id="b1">
        <span class="b11"></span>
        <span class="b12"></span>
        <span class="b13"></span>
        <span class="b14"></span>
        <span class="b15"></span>
        <span class="b16"></span>
        <span class="b17"></span>
        <span class="b18"></span>
        <span class="b19"></span>
        <span class="b110"></span>
    </div>
    <div id="figure">

        <div id="a7">
            <span id="a71">Rogs.</span>
            <span id="a73">
                <b class="a731">19</b>
                <b class="a732">29</b>
            </span>
            <span id="a74">
                <b class="a741">30/</b>
                <b class="a742">06/</b>
                <b class="a743">2012</b>
            </span>
            <span id="a76">Developer</span>
        </div>

        <div id="f1"></div>
        <div id="f2"></div>

        <div id="f3">
            <div id="f31"> <span class="f311"><b></b></span> <span class="f312"><b></b></span> </div>
            <div id="f32"> <span class="f321"></span> <span class="f322"></span> </div>
            <div id="f33"></div>
            <div id="f34"></div>
        </div>

        <div id="f4">
            <div id="f41"></div>
            <div id="f42"></div>
            <div id="f43" class="f431"></div>
            <div id="f43" class="f432"></div>
            <div id="f43" class="f433"></div>
            <div id="f43" class="f434"></div>
        </div>

        <div id="f5"></div>

        <div id="f6"></div>
        <div id="f7">
            <div id="f71"></div>
            <div id="f72"></div>
        </div>
        <div id="f8">
            <div id="f81"></div>
            <div id="f82"></div>
        </div>
        <div id="f9">
            <span></span>
        </div>

    </div>
</div>
<iframe width="420" height="345" src="https://www.youtube.com/embed/u6G1Ab3K8oo?autoplay=1" frameborder="0" allow="autoplay" allowfullscreen></iframe>
