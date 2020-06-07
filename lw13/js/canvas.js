window.onload = () => {
    const canvas = document.getElementById("myCanvas");
    const context = canvas.getContext("2d");

    //мальчик с красным помпоном
    context.beginPath();//штаны
    context.rect(175, 395, 160, 30);
    context.fillStyle = "#3b75c6";
    context.fill();
    context.beginPath();//ноги
    context.moveTo(160, 426);
    context.quadraticCurveTo(210, 410, 254, 423);//левая нога
    context.quadraticCurveTo(320, 412, 350, 428);//правая нога
    context.lineTo(160, 426);//подошвы
    context.fillStyle = "#312c30";
    context.fill();
    context.beginPath();//куртка
    context.moveTo(174, 293);
    context.quadraticCurveTo(150, 320, 145, 362);//левая рука
    context.lineTo(173, 362);
    context.lineTo(164, 394);//левый бочок
    context.quadraticCurveTo(230, 420, 334, 396);//низ куртки
    context.lineTo(357, 365);
    context.quadraticCurveTo(350, 320, 326, 292);//правая рука
    context.quadraticCurveTo(250, 350, 174, 292);//верх куртки
    context.fillStyle = "#d06d5e";
    context.fill();
    context.beginPath();//линии на куртке
    context.moveTo(173, 362);
    context.lineTo(180, 340);//линия левой руки
    context.moveTo(326, 368);
    context.lineTo(322, 342);//линия правой руки
    context.moveTo(254, 336);
    context.lineTo(251, 407);//центральная линия
    context.stroke();
    context.beginPath();//верхняя пуговка
    context.arc(242, 365, 2, 0, 2 * Math.PI);
    context.stroke();
    context.beginPath();//средняя пуговка
    context.arc(242, 342, 2, 0, 2 * Math.PI);
    context.stroke();
    context.beginPath();//нижняя пуговка
    context.arc(242, 390, 2, 0, 2 * Math.PI);
    context.stroke();
    context.beginPath();//правый воротничок
    context.ellipse(290, 316, 12, 40,  Math.PI * 0.361, 0, 2 * Math.PI);
    context.fillStyle = "#ff1d3d";
    context.fill();
    context.beginPath();//левый воротничок
    context.moveTo(174, 293);
    context.bezierCurveTo(210, 336, 270, 350, 248, 322);//нижняя кривая
    context.quadraticCurveTo(225, 325, 174, 293);//верхняя кривая
    context.fill();
    context.beginPath(); //левая рука
    context.arc(159, 373, 18, 0, 2 * Math.PI);
    context.fill();
    context.beginPath(); //левый палец
    context.arc(172, 368, 8, 0, 2 * Math.PI);
    context.fill();
    context.lineWidth = 1;
    context.stroke();
    context.beginPath(); //правая рука
    context.arc(343, 378, 18, 0, 2 * Math.PI);
    context.fill();
    context.beginPath(); //правый палец
    context.arc(328, 376, 8, 0, 2 * Math.PI);
    context.fill();
    context.stroke();
    context.beginPath(); //лицо
    context.arc(250, 202, 118, 1.91 * Math.PI,1.06 * Math.PI);
    context.fillStyle = "#ffebbf";
    context.fill();
    context.beginPath(); //левый глаз
    context.ellipse(219, 218, 30, 36, Math.PI/6, 0, 2 * Math.PI);
    context.fillStyle = "#fff";
    context.fill();
    context.beginPath();
    context.moveTo(250, 203);
    context.quadraticCurveTo(250, 220, 252, 220);//тень между глазами
    context.strokeStyle = '#a09d9d';
    context.stroke();
    context.beginPath(); //правый глаз
    context.ellipse(282, 216, 30, 36, - Math.PI/6, 0, 2 * Math.PI);
    context.fill();
    context.beginPath(); //зубы
    context.moveTo(224, 280);
    context.lineTo(287, 278);//верхняя линия рта
    context.lineTo(274, 289);//правая линия зубов
    context.lineTo(232, 289);//нижняя линия зубов
    context.lineTo(224, 280);//левая линия зубов
    context.fill();
    context.lineWidth = 1;
    context.moveTo(242, 289);
    context.lineTo(242, 279);
    context.moveTo(256, 289);
    context.lineTo(256, 280);
    context.moveTo(268, 289);
    context.lineTo(272, 279);
    context.strokeStyle = '#000';
    context.stroke();
    context.beginPath(); //левый зрачок
    context.arc(228, 220, 3, 0, 2 * Math.PI);
    context.fillStyle = "#000";
    context.fill();
    context.stroke();
    context.beginPath(); //правый зрачок
    context.arc(268, 219, 3, 0, 2 * Math.PI);
    context.fill();
    context.stroke();
    context.beginPath();//рот
    context.moveTo(232, 289);
    context.lineTo(256, 305);
    context.lineTo(274, 289);
    context.fill();
    context.beginPath(); //шапка
    context.arc(250, 198, 115, 1.06 * Math.PI, 1.91 * Math.PI);
    context.fillStyle = "#3a74c5";
    context.fill();
    context.beginPath();
    context.moveTo(130, 202); //нижний козырек шапочки
    context.quadraticCurveTo(250, 162, 368, 192);
    context.lineTo(368, 168); //правая вертикальная линия шапочки
    context.quadraticCurveTo(250, 135, 130, 178); //верхний козырек шапочки
    context.fillStyle = "#ff2040";
    context.fill();
    context.beginPath();//брови
    context.moveTo(172, 192);
    context.lineTo(198, 168); //левая бровь
    context.lineWidth = 3;
    context.stroke();
    context.moveTo(318, 186);
    context.lineTo(290, 166); //правая бровь
    context.lineWidth = 3;
    context.stroke();
    context.beginPath();//помпон
    context.moveTo(211, 86);
    context.lineTo(264, 84);
    context.moveTo(213, 77);
    context.lineTo(264, 93);
    context.moveTo(217, 68);
    context.lineTo(257, 103);
    context.moveTo(225, 62);
    context.lineTo(249, 109);
    context.moveTo(234, 59);
    context.lineTo(238, 110);
    context.moveTo(244, 60);
    context.lineTo(230, 110);
    context.moveTo(253, 67);
    context.lineTo(220, 106);
    context.moveTo(260, 72);
    context.lineTo(215, 98);
    context.lineCap = "round";
    context.lineWidth = 5;
    context.strokeStyle = '#fd203f';
    context.stroke();

    //толстенький мальчик
    context.beginPath();//ноги
    context.moveTo(448, 378);
    context.lineTo(460, 420);
    context.lineTo(758, 425);
    context.lineTo(770, 380);
    context.lineTo(448, 378);
    context.fillStyle = '#83462b';
    context.fill();
    context.beginPath();//ботинки
    context.moveTo(452, 420);
    context.quadraticCurveTo(550, 400, 616, 420);//левая нога
    context.quadraticCurveTo(700, 400, 770, 425);//правая нога
    context.lineTo(452, 426);//подошвы
    context.fillStyle = "#2c2937";
    context.fill();
    context.beginPath();//туловище
    context.moveTo(490, 230);
    context.arcTo(468, 230, 430, 260, 50);
    context.lineTo(410, 300);
    context.lineTo(430, 330);
    context.arcTo(440, 373, 455, 385, 25);
    context.lineTo(480, 398);
    context.arcTo(500, 405, 680, 410, 120);
    context.lineTo(640, 405);
    context.arcTo(660, 405, 670, 400, 50);
    context.quadraticCurveTo(690, 390, 770, 380);
    context.quadraticCurveTo(800, 365, 795, 335);
    context.lineTo(795, 270);
    context.quadraticCurveTo(775, 240, 750, 235);
    context.fillStyle = '#ff1f41';
    context.fill();
    context.beginPath();//шапка
    context.ellipse(610, 190, 150, 125,  0, 1.02 * Math.PI, 1.93 * Math.PI);
    context.quadraticCurveTo(600, 100, 460, 184);
    context.fillStyle = '#00b9c7';
    context.fill();
    context.beginPath();//лицо
    context.ellipse(610, 190, 150, 125,  0, 1.93 * Math.PI, 1.02 * Math.PI);
    context.quadraticCurveTo(600, 100, 756, 164);
    context.fillStyle = '#ffeec5';
    context.fill();
    context.beginPath();//полоска на шапке
    context.moveTo(457, 180);
    context.quadraticCurveTo(600, 95, 760, 160);
    context.lineTo(760, 170);
    context.quadraticCurveTo(600, 110, 457, 188);
    context.fillStyle = '#ffe01d';
    context.fill();
    context.beginPath();//помпон
    context.moveTo(589, 70);
    context.lineTo(585, 78);
    context.quadraticCurveTo(595, 80, 605, 75);
    context.quadraticCurveTo(615, 85, 630, 75);
    context.bezierCurveTo(642, 78, 655, 70, 630, 60);
    context.quadraticCurveTo(615, 50, 608, 56);
    context.quadraticCurveTo(595, 50, 580, 60);
    context.bezierCurveTo(535, 80, 575, 88, 589, 70);
    context.fill();
    context.beginPath();//левая рука
    context.moveTo(470, 340);
    context.lineTo(440, 340);
    context.bezierCurveTo(390, 335, 405, 300, 410, 295);
    context.bezierCurveTo(420, 272, 460, 300, 475, 310);
    context.bezierCurveTo(480, 320, 500, 330, 470, 340);
    context.fill();
    context.beginPath();//правая рука
    context.moveTo(808, 280);
    context.lineTo(814, 308);
    context.bezierCurveTo(818, 330, 790, 345, 762, 325);
    context.bezierCurveTo(738, 330, 738, 315, 755, 300);
    context.bezierCurveTo(760, 275, 780, 270, 808, 280);
    context.fill();
    context.beginPath();//тень над глазами
    context.moveTo(559, 156);
    context.quadraticCurveTo(595, 129, 615, 165);//над левым глазом
    context.moveTo(621, 165);
    context.quadraticCurveTo(640, 137, 669, 153);//над правым глазом
    context.strokeStyle = '#a09d9d';
    context.stroke();
    context.beginPath(); //левый глаз
    context.ellipse(580, 185, 36, 43, Math.PI/6, 0, 2 * Math.PI);
    context.fillStyle = "#fff";
    context.fill();
    context.beginPath();
    context.moveTo(619, 190);
    context.quadraticCurveTo(616, 180, 619, 172);//тень между глазами
    context.stroke();
    context.beginPath(); //правый глаз
    context.ellipse(655, 188, 36, 43, - Math.PI/6, 0, 2 * Math.PI);
    context.fill();
    context.beginPath();//линия на куртке
    context.moveTo(630, 315);
    context.lineTo(628, 406);
    context.lineWidth = 1;
    context.strokeStyle = '#000';
    context.stroke();
    context.beginPath();//зубы
    context.moveTo(598, 259);
    context.lineTo(636, 261);
    context.lineTo(634, 269);
    context.lineTo(595, 267);
    context.lineTo(598, 258);
    context.fill();
    context.lineWidth = 3;
    context.stroke();
    context.beginPath();//рот
    context.moveTo(596, 268);
    context.lineTo(588, 263);
    context.lineTo(597, 258);
    context.moveTo(595, 268);
    context.lineTo(605, 280);
    context.lineTo(618, 284);
    context.lineTo(630, 284);
    context.lineTo(635, 269);
    context.fillStyle = '#000';
    context.fill();
    context.lineWidth = 1;
    context.stroke();
    context.beginPath(); //линии зубов
    context.moveTo(608, 268);
    context.lineTo(608, 260);
    context.moveTo(620, 268);
    context.lineTo(620, 260);
    context.moveTo(593, 286);
    context.quadraticCurveTo(610, 292, 648, 286);
    context.moveTo(494, 255);
    context.quadraticCurveTo(615, 350, 734, 247);
    context.lineWidth = 1;
    context.stroke();
    context.beginPath(); //левый зрачок
    context.arc(592, 185, 3, 0, 2 * Math.PI);
    context.fill();
    context.stroke();
    context.beginPath(); //правый зрачок
    context.arc(639, 187, 3, 0, 2 * Math.PI);
    context.fill();
    context.stroke();
    context.beginPath();//верхняя пуговка
    context.ellipse(620, 320, 2, 4,  0, 0, 2 * Math.PI);
    context.fill();
    context.beginPath();//средняя пуговка
    context.ellipse(623, 356, 2, 4,  0, 0, 2 * Math.PI);
    context.fill();
    context.beginPath();//нижняя пуговка
    context.ellipse(619, 390, 2, 4,  0, 0, 2 * Math.PI);
    context.fill();
}

