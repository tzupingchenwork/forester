// 計算各票種總數存在session裡 Start
var studentTktNum = 0;
var childTktNum = 0;
var adultsTktNum = 0;

var buttonSub = document.querySelectorAll(".tickSub");
var buttonAdd = document.querySelectorAll(".tickAdd");

for(let i = 0 ; i < buttonAdd.length ; i++ ){
	buttonAdd[i].addEventListener('click',function(){
        let tktName = this.parentNode.parentNode.children[1].children[0].innerText;
        if ( tktName == '全票'){
            adultsTktNum += 1;
            this.previousElementSibling.innerText = adultsTktNum;
        }else if( tktName == '半票' ){
            studentTktNum += 1;
            this.previousElementSibling.innerText = studentTktNum;
        }else if( tktName == '兒童票' ){
            childTktNum += 1;
            this.previousElementSibling.innerText = childTktNum;
        }
	});
}

for(let j = 0; j < buttonSub.length ; j++ ){
	buttonSub[j].addEventListener('click',function(){
        let tktName = this.parentNode.parentNode.children[1].children[0].innerText;
        if ( tktName == '全票'){
            if( adultsTktNum > 0 ){
                adultsTktNum -= 1;
                this.nextElementSibling.innerText = adultsTktNum;
            }
        }else if( tktName == '半票' ){
            if( studentTktNum > 0 ){         
                studentTktNum -= 1;
                this.nextElementSibling.innerText = studentTktNum;
            }
        }else if( tktName == '兒童票' ){
            if( childTktNum > 0 ){  
                childTktNum -= 1;
                this.nextElementSibling.innerText = childTktNum;
            }
        }
	});
}
// 計算各票種總數存在session裡 End

// Read More Start
var limit = 20;
var wordslimit = document.getElementsByClassName('wordslimit');
for(var i = 0 ; i < wordslimit.length ; i++ ){
    // console.log(wordslimit[i].innerText); 
    if( wordslimit[i].innerText.length > limit){
        wordslimit[i].innerText = wordslimit[i].innerText.substr(0, limit) + "...";
    }
}
// string.substr(start, length)

// Read More END

// set  buyTickets  Session
var buyTickets = document.getElementsByClassName('buyTicketsbtn')[0];
var ticketsBord = document.getElementsByClassName('ticketsBord')[0];

buyTickets.addEventListener('click',function(e){

    let adultsTktName = ticketsBord.children[0].children[1].children[0].innerText;
    let adultsTktPrice = ticketsBord.children[0].children[1].children[2].innerText;

    console.log( adultsTktName + " " + adultsTktPrice + " " + adultsTktNum);
    sessionStorage.setItem('adults', adultsTktName + "," + adultsTktPrice + "," + adultsTktNum);

    let studentTktName = ticketsBord.children[1].children[1].children[0].innerText;
    let studentTktPrice = ticketsBord.children[1].children[1].children[2].innerText;

    console.log( studentTktName + " " + studentTktPrice + " " + studentTktNum);
    sessionStorage.setItem('student', studentTktName + "," + studentTktPrice + "," + studentTktNum);

    let childTktName = ticketsBord.children[2].children[1].children[0].innerText;
    let childTktPrice = ticketsBord.children[2].children[1].children[2].innerText;

    console.log( childTktName + " " + childTktPrice + " " + childTktNum);
    sessionStorage.setItem('child', childTktName + "," + childTktPrice + "," + childTktNum);
});




// 初始化
var controller = new ScrollMagic.Controller();

// 第一屏動畫 start

// var tlts1 = new TimelineMax();
// tlts1.fromTo('.green1-1', 1, {
//     x: '0',
//     y: '75vh'
// }, {
//     x: '100vw',
//     y: '75vh'
// },0).fromTo('.green1-3', 1, {
//     x: '1vw',
//     y: '60vh'
// }, {
//     x: '100vw',
//     y: '60vh'
// },0);

// var scene_s = new ScrollMagic.Scene({
//     triggerElement: "#trigger_01",
//     duration: '100%',
//     triggerHook: 0,
// })
// .setPin('.section_pupularEvent')
// .setTween(tlts1)
// // .addIndicators({
// //     name: 'popularPlans'
// // })
// .addTo(controller);



//首頁前景物件動作

TweenMax.to('#index_backpack',1,{
    bottom: '60px',
    repeat: -1,
    yoyo: true,
});

TweenMax.to('#index_ticket',1.3,{
    bottom: '50px',
    repeat: -1,
    yoyo: true,
});

TweenMax.to('#index_map',.7,{
    bottom: '70px',
    repeat: -1,
    yoyo: true,
});

TweenMax.to('#index_notebook',1.5,{
    bottom: '65px',
    repeat: -1,
    yoyo: true,
});
// 第一屏動畫 end


// 第二屏動畫 start
var tlts1 = new TimelineMax();
tlts1.fromTo('.runningBear', 1, {
    x: '0',
    y: '75vh'
}, {
    x: '100vw',
    y: '75vh'
},0).fromTo('.butterfly', 1, {
    x: '1vw',
    y: '60vh'
}, {
    x: '100vw',
    y: '60vh'
},0);

var scene_s = new ScrollMagic.Scene({
    triggerElement: "#trigger_01",
    duration: '100%',
    triggerHook: 0,
})
.setPin('.section_pupularEvent')
.setTween(tlts1)
// .addIndicators({
//     name: 'popularPlans'
// })
.addTo(controller);

var airballoon;
airballoon = new TweenMax("#hotplan-airballoon", 20, {
    bezier:{
        type:"soft", 
        values:[{
        top: '50px',
        right: '750px',          
    }, {
        top: '250px',
        right: '1950px',          
    },],
        autoRotate:true
    },
    ease:Linear.easeNone,
    repeat:-1}
);


// 第二屏動畫 end

// ====================================
// 第三屏動畫 start

var tween = TweenLite.to("#dropBear", 1, {bezier:{values:MorphSVGPlugin.pathDataToBezier("m13.99992,-0.25026c4,4 4,12 4,20c0,16 0.55645,39.89672 4,60.00002c4.77534,27.87823 11.1594,40.31375 16,52.00001c6.84565,16.52686 10.89596,28.89093 24,44.00002c11.11915,12.82048 34.57055,34.03477 68.00002,56c26.95169,17.70894 53.01625,25.42897 76.00002,36c21.18999,9.746 34.55968,18.83694 64.00002,32.00003c23.09491,10.32596 43.70319,13.9902 64,16c27.86377,2.75906 52.09735,6.02924 72.00003,8c20.29681,2.0098 48,8 100.00003,8c32,0 64,0 112,0c40,0 84.20978,4.57886 112.00006,8c16.36884,2.01511 32.1156,3.35925 56,8c36.20117,7.03387 67.75183,13.99316 92,16c15.9455,1.3197 22.46924,4.30447 24,8c2.16479,5.22626 16.59741,9.89706 20,12c7.60846,4.70227 14.16199,16.21402 16,24c4.10992,17.41 13.99023,27.70322 16,48.00003c1.18243,11.94159 0,20 0,24c0,4 0,12 0,16c0,4 -6.44263,12.63712 -12,24c-6.33643,12.95572 -11.25061,24.82724 -20,32.00003c-11.15332,9.14349 -20,20 -28,28c-4,4 -16.63708,10.44257 -28,16c-12.95569,6.33643 -23.2226,17.79364 -40,24c-15.46802,5.72198 -36.47235,13.50159 -64,20c-36.93225,8.71851 -95.79352,29.11292 -136.00006,36c-27.87823,4.77533 -43.51422,13.97382 -56,16c-11.84503,1.92218 -24.12268,7.64923 -36,12c-20.22638,7.40906 -47.41095,16.69238 -52.00003,20c-21.76791,15.68945 -36.30447,22.46924 -40,24c-10.45251,4.32959 -12,12 -12,16c0,4 -9.94504,15.29498 -12,24c-1.83801,7.78601 0,20 0,36.00006c0,8 -1.46619,20.0899 0,32c2.01511,16.36884 4.69238,23.41095 8,28c5.2298,7.25598 7.79416,17.19476 12,24c4.70227,7.60846 13.6572,10.63147 20,20c17.07849,25.22546 18.85648,36.84668 28,48c7.17276,8.74939 7.87424,13.64832 16.00003,28c13.93561,24.61298 36.44855,43.67328 48,60.00006c8.3299,11.77344 15.63861,17.23218 24,32c8.12579,14.35168 17.94501,35.29504 20,44c2.75702,11.67896 -4.27094,24.58057 0,40c6.22589,22.47754 11.87421,45.64832 20,60c2.78711,4.92261 4,16 4,28c0,12 0,24 0,32c0,4 1.53076,12.30444 0,16c-2.16479,5.2262 -4,8 -8,12c-4,4 -8,12 -16,20c-8,8 -16,16 -28,24c-12,8 -21.54749,19.67041 -32,24c-7.39105,3.06152 -12.10699,7.08093 -16,8c-8.70502,2.05493 -12.60895,4.9386 -20,8c-10.45251,4.32959 -13.79221,5.69128 -24.00003,12c-7.60846,4.70227 -10.44418,3.71228 -20,12c-6.75699,5.86035 -15.41092,12.69238 -20,16c-7.25598,5.22986 -12,8 -24,20c-8,8 -12,12 -12,16c0,4 1.53073,8.30444 0,12c-4.32956,10.45251 -8,12 -8,16c0,4 -1.83801,12.21399 0,20c2.05496,8.70496 7.7941,21.19482 12,28.00012c4.70227,7.6084 8.30447,6.46924 12,8c5.22626,2.16479 4.39154,7.29773 12,12c3.40262,2.10291 8.10699,-0.91907 12,0c8.70502,2.05493 8,8 12,8c4,0 6.82184,1.38477 16,8c7.25598,5.22986 12,8 16,8c4,0 4.74402,2.77014 12.00003,8c4.58911,3.30762 4.3045,6.46924 8,8c5.22626,2.16479 11.29773,4.3916 16,12c2.10291,3.40259 2.46924,4.30444 4,8c2.16479,5.2262 9.34998,13.23999 16,24c2.974,4.81201 9.83521,6.7738 12,12c1.53076,3.69556 2.7702,8.74402 8,16c3.30762,4.58911 8,12 12,16c4,4 5.67542,5.67542 12,12c6.32458,6.32458 5.67542,9.67542 12,16c6.32458,6.32458 7.29773,12.3916 12,20c2.10291,3.40259 4.69238,3.41089 8,8c5.2298,7.25598 6.46924,12.30444 8,16c4.32959,10.45251 10.16199,12.21399 12,20c2.05499,8.70496 11.15942,16.31372 16,28c3.42285,8.26343 4.22516,12.94666 8,20c6.80524,12.7157 14.46924,16.30444 16,20c2.16479,5.2262 9.94501,7.29504 12,16c1.83801,7.78601 6.07782,16.15491 8,28c2.02618,12.48572 3.15942,20.31372 8,32c3.42285,8.26343 8,16 8,24c0,4 0,8 0,20c0,4 4,16 4,24c0,4 1.94501,11.29504 4,20c3.67603,15.57202 5.94501,23.29504 8,32.00012c0.91901,3.89307 3.67047,9.54736 8.00006,20c3.06146,7.39111 1.17157,9.17163 4,12c2.82843,2.82837 -4.20587,13.19482 0,20c4.70227,7.6084 7.08099,12.10693 8,16c2.05499,8.70508 7.67041,9.54761 12,20c1.53076,3.69556 -0.91901,12.10693 0,16c2.05499,8.70508 8,16 12,20c4,4 4,8 4,12l0,4"
, {align:"dropBear"}), type:"cubic"}});  

var scene_s = new ScrollMagic.Scene({
    triggerElement: "#trigger_02",
    duration: '320%',
    triggerHook: 0.3,
    offset: 0,
})
.setTween(tween)
// .addIndicators({
//     name: 'monthPlans'
// })
.addTo(controller);



//第三屏親子動一動雲的效果

TweenMax.to('#bg_cloud_two', 60,{
    bottom: '-300px',
    left: '-1100px',
    repeat: -1,
    // yoyo: true,
});

TweenMax.to('#bg_cloud_three', 40,{
    bottom: '-900px',
    left: '1900px',
    repeat: -1,
    // yoyo: true,
});

// function positionTheDot() {

//     // What percentage down the page are we? 
//     var scrollPercentage = (document.documentElement.scrollTop + document.body.scrollTop) / (document.documentElement.scrollHeight - document.documentElement.clientHeight);
  
//     // Get path length
//     var path = document.getElementById("theMotionPath");
//     var pathLen = path.getTotalLength();
    
//     // Get the position of a point at <scrollPercentage> along the path.
//     var pt = path.getPointAtLength(scrollPercentage * pathLen);
    
//     // Position the red dot at this point
//     var dot = document.getElementById("dropBear");
//     dot.setAttribute("transform", "translate("+ pt.x + "," + pt.y + ")");
    
//   };
  
//   // Update dot position when we get a scroll event.
//   window.addEventListener("scroll", positionTheDot);
  
//   // Set the initial position of the dot.
//   positionTheDot();

// 第三屏動畫 end

// ====================================
// 第四屏動畫 start
var tween2  = new TweenMax.to( $('.bk_moun'), 1.2,{
    scaleX: "1",
    scaleY: "1",
    ease:Quad.easeInOut,
});

var scene_s = new ScrollMagic.Scene({
    triggerElement: "#trigger_03",
    duration: '100%',
    triggerHook: 0.8,
    offset: 750
})
.setPin('.section_buyTickets')
.setTween(tween2)
// .addIndicators({
//     name: 'buyTickets'
// })
.addTo(controller);

// var tween3 = new TweenMax().fromTo( ".section_blog", 1,{
// y:"0%"},{y:"100%", ease: Linear.easeNone});
// var scene_s = new ScrollMagic.Scene({
//     triggerElement: "#trigger_04",
//     duration: '200%',
//     triggerHook: 0.8,
//     offset: 0
// })
// .setPin('.section_buyTickets')
// .setTween(tween3)
// .addIndicators({
//     name: 'section_blog'
// })
// .addTo(controller);


// 第四屏動畫 end
// var tween3  = TweenMax.to( $('.section_blog'), 0.5,{
//     backgroundImage: 'linear-gradient(to bottom, #ffffff, #c0bdcf, #837fa1, #494775, #04154b)',
//     ease:Quad.easeInOut,
//     // onComplete: flyBear
// });
// linear-gradient(rgba(209,144,114,0) 20%, #02437b 50%, #6a789d 70%, #db99a3 94%, #f7eac6 100%)
// radial-gradient(150% 50%, #febdb9 0%, rgba(253,214,189,0) 100%)
// background:-o-linear-gradient(rgba(209,144,114,0) 20%, #02437b 50%, #6a789d 70%, #db99a3 94%, #f7eac6 100%);
// TweenMax.set(".section_blog",{backgroundImage:"transparent"});
//TweenMax.to( $('.section_blog'), 4,{
//        backgroundImage: 'radial-gradient(150% 50%, #febdb9 0%, rgba(253,214,189,0) 100%)',
//        repeat:0,
        // ease:Quad.easeInOut,
        // onComplete: flyBear
//});

// var scene_s = new ScrollMagic.Scene({
//     triggerElement: "#trigger_04",
//     duration: '100%',
//     triggerHook: 0.8,
//     offset: 180
// })
// .setTween(tween2)
// .addIndicators({
//     name: 'blog'
// })
// .addTo(controller);


