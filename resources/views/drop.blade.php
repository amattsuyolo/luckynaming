<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tiffany Water Drop</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Yomogi&display=swap"
      rel="stylesheet"
    />
    <style>
        * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  background: #edeeed;
  font-family: "Yomogi", cursive;
}
.drops {
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
}
.drop {
  position: absolute;
  width: 150px;
  height: 150px;
  background: transparent;
  border-radius: 43% 57% 46% 54% / 63% 44% 56% 37%;
  box-shadow: inset 10px 10px 10px rgb(0, 0, 0, 0.05),
    15px 25px 10px rgb(0, 0, 0, 0.1), 15px 20px 20px rgb(0, 0, 0, 0.05),
    inset -10px -10px 15px rgb(255, 255, 255, 0.9);
}
.drop::before {
  content: "";
  position: absolute;
  top: 25px;
  left: 35px;
  background: #fff;
  width: 20px;
  height: 20px;
  border-radius: 43% 57% 53% 47% / 33% 43% 57% 67%;
}

.drop::after {
  position: absolute;
  top: 20px;
  left: 65px;
  background: #fff;
  width: 10px;
  height: 10px;
  border-radius: 43% 57% 53% 47% / 57% 43% 57% 43%;
}

.drop:nth-child(2) {
  transform: scale(0.5) translate(-200px, 180px);
  border-radius: 56% 44% 53% 47% / 68% 43% 57% 32%;
}
.drop:nth-child(1)::after {
  content: "Tiffany :)";
}

.drop:nth-child(3) {
  transform: scale(0.5) translate(180px, 180px);
  border-radius: 56% 44% 43% 57% / 49% 36% 64% 51%;
}

.drop:nth-child(4) {
  transform: scale(0.25) translate(120px, -450px);
  border-radius: 56% 44% 43% 57% / 49% 36% 64% 51%;
}

    </style>
</head>
<body>
    <div class="drops">
        <div class="drop"></div>
        <div class="drop"></div>
        <div class="drop"></div>
        <div class="drop"></div>
      </div>
</body>
</html>