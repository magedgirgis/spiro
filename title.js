// Created by Creativewiz
"use strict";

let c, ctx, W, H, ball, addGrad, PI = Math.PI;
let balls = [];

const random = (max = 1, min = 0) => Math.random() * (max - min) + min;

const clear = () => {
    ctx.fillStyle = 'rgba(0, 0, 0, .2)';
    ctx.fillRect(0, 0, W, H);
};

const newRadient = () => {
    let newRadialGradient;
    newRadialGradient = ctx.createLinearGradient(W / 2 - 150, H / 2 - 20 + addGrad, W / 2 - 150, H / 2 + 20 + addGrad);
    newRadialGradient.addColorStop(0, 'black');
    newRadialGradient.addColorStop(1, 'aqua');
    return newRadialGradient;
};

class Ball {
    constructor(angle) {
        this.angle = angle;
        this.x = W / 2 + 150 * Math.cos(this.angle);
        this.y = H / 2 + 150 * Math.sin(this.angle);
        this.speedY = 1 + random(1.5);
        this.speedX = balls.length % 2 == 0 ? 0.2 + random(1) : -0.2 + random(0, -1);
        this.run = false;
        this.colorBall = 'aqua';
        this.colorBalls = 'transparent';
        this.radBalls = random(1.5, 0.8);
        this.rad = 150;
        this.direction = 1;
        this.fall = 0;
    }
    drawBall() {
        ctx.beginPath();
        ctx.fillStyle = this.colorBall;
        ctx.arc(this.x, this.y, 3, 0, Math.PI * 2, true);
        ctx.fill();
        ctx.closePath();
    }
    drawBalls() {
        ctx.beginPath();
        ctx.fillStyle = this.colorBalls;
        ctx.arc(this.x, this.y, this.radBalls, 0, Math.PI * 2, true);
        ctx.fill();
        ctx.closePath();
    }
    updateBall() {
        if (this.angle <= PI * 2) {
            this.angle += 0.05;
            this.x = W / 2 + 150 * Math.cos(this.angle);
            this.y = H / 2 + 150 * Math.sin(this.angle);
            this.drawBall();
        }
    }
    updateBalls() {
        if (this.run) {
            this.colorBalls = 'aqua';
            this.y += this.speedY;
        }
        if (this.y > H / 2 + 30) {
            this.speedY = 0;
            this.fall++;
            this.x += this.speedX * this.direction;
            if (this.x > W / 2 + this.rad || this.x < W / 2 - this.rad) this.direction *= -1;
            if (this.fall > 200) {
                this.direction = -1;
                this.speedX = 3;
                addGrad += 0.006;
            }
            if (this.x <= W / 2 - this.rad) {
                this.speedX = 0;
                this.colorBalls = 'aqua';
            }
            if (this.fall > 500) play();
        }
        this.drawBalls();
    }
}

const init = () => {
    c = document.getElementById("canvas");
    c.width = W = 250;
    c.height = H = 50;
    ctx = c.getContext("2d");
    play();
    animate();
};


const createBalls = () => {
    for (let i = PI; i <= PI * 2; i += random(0.06, 0.03)) balls.push(new Ball(i));
};

const text = () => {
    ctx.beginPath();
    ctx.textBaseline = 'middle';
    ctx.textAlign = "center";
    ctx.font = '26px Verdana';
    ctx.fillStyle = newRadient();
    ctx.fillText('Spiro Spathis', W / 2, H / 2);
    ctx.closePath();
};

const animate = () => {
    clear();
    text();
    ball.updateBall();
    for (var i = balls.length - 1; i >= 0; i--) {
        if (ball.x > balls[i].x) {
            balls[i].run = true;
        }
        balls[i].updateBalls();
    }
    if (addGrad > 0) addGrad -= 0.25;
    window.requestAnimationFrame(animate);
};

const play = () => {
    addGrad = 50;
    ball = new Ball(PI);
    balls = [];
    createBalls();
};

// window.addEventListener("mouseover", ply);
window.addEventListener("click", ply);

function ply() {
    document.getElementById("a").play();
}

window.onload = init;

