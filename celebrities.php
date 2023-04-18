<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title></title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
<style media="screen">
    *{
    margin: 0;
    padding: 0;
    -webkit-box-sizing: border-box;
          box-sizing: border-box;
    }
h1{
  font-size: 2.5rem;
  font-family: 'Montserrat';
  font-weight: normal;
  color: #444;
  text-align: center;
  margin: 2rem 0;
}

.wrapper{
  width: 90%;
  margin: 0 auto;
  max-width: 80rem;
}

.cols{
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}

.col{
  width: calc(25% - 2rem);
  margin: 1rem;
  cursor: pointer;
}

.container{
  -webkit-transform-style: preserve-3d;
          transform-style: preserve-3d;
	-webkit-perspective: 1000px;
	        perspective: 1000px;
}

.front,
.back{
  background-size: cover;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.25);
  border-radius: 10px;
	background-position: center;
	-webkit-transition: -webkit-transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
	transition: -webkit-transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
	-o-transition: transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
	transition: transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
	transition: transform .7s cubic-bezier(0.4, 0.2, 0.2, 1), -webkit-transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
	-webkit-backface-visibility: hidden;
	        backface-visibility: hidden;
	text-align: center;
	min-height: 280px;
	height: auto;
	border-radius: 10px;
	color: #fff;
	font-size: 1.5rem;
}

.back{
  background: #cedce7;
  background: -webkit-linear-gradient(45deg,  #cedce7 0%,#a9c3ce 100%);
  background: -o-linear-gradient(45deg,  #cedce7 0%,#a9c4d1 100%);
  background: linear-gradient(45deg,  #cedce7 0%,#b8d3df 100%);
  color: #070707;
  font-style: inherit;
}

.front:after{
	position: absolute;
    top: 0;
    left: 0;
    z-index: 1;
    width: 100%;
    height: 100%;
    content: '';
    display: block;
    opacity: .6;
    
    -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
    border-radius: 10px;
}
.container:hover .front,
.container:hover .back{
    -webkit-transition: -webkit-transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
    transition: -webkit-transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
    -o-transition: transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
    transition: transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
    transition: transform .7s cubic-bezier(0.4, 0.2, 0.2, 1), -webkit-transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
}

.back{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
}

.inner{
    -webkit-transform: translateY(-50%) translateZ(60px) scale(0.94);
            transform: translateY(-50%) translateZ(60px) scale(0.94);
    top: 50%;
    position: absolute;
    left: 0;
    width: 100%;
    padding: 2rem;
    -webkit-box-sizing: border-box;
            box-sizing: border-box;
    outline: 1px solid transparent;
    -webkit-perspective: inherit;
            perspective: inherit;
    z-index: 2;
}

.container .back{
    -webkit-transform: rotateY(180deg);
            transform: rotateY(180deg);
    -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
}

.container .front{
    -webkit-transform: rotateY(0deg);
            transform: rotateY(0deg);
    -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
}

.container:hover .back{
  -webkit-transform: rotateY(0deg);
          transform: rotateY(0deg);
  -webkit-transform-style: preserve-3d;
          transform-style: preserve-3d;
}

.container:hover .front{
  -webkit-transform: rotateY(-180deg);
          transform: rotateY(-180deg);
  -webkit-transform-style: preserve-3d;
          transform-style: preserve-3d;
}

.front .inner p{
  font-size: 2rem;
  margin-bottom: 2rem;
  position: relative;
}

.front .inner p:after{
  content: '';
  width: 4rem;
  height: 2px;
  position: absolute;
  background: #C6D4DF;
  display: block;
  left: 0;
  right: 0;
  margin: 0 auto;
  bottom: -.75rem;
}

.front .inner span{
  color: rgba(255,255,255,0.7);
  font-family: 'Montserrat';
  font-weight: 300;
}

@media screen and (max-width: 64rem){
  .col{
    width: calc(33.333333% - 2rem);
  }
}

@media screen and (max-width: 48rem){
  .col{
    width: calc(50% - 2rem);
  }
}

@media screen and (max-width: 32rem){
  .col{
    width: 100%;
    margin: 0 0 2rem 0;
  }
}
.Featured-models img{
    height: 380px;
    width: 30%;
    border: 1px solid rgb(252, 250, 250);
    box-shadow: 0 4px 8px 0 rgba(189, 186, 186, 0.815);
    border-radius:15px ;
    margin: 10px;
  }    
  .Featured-models{
    margin-left: 60px;
  }
</style>
</head>
<body>
    <div class="main">
        
        
  <h1 style="letter-spacing: 5px;text-shadow: 4px 3px 5px #3b3a3a;color: rgb(15, 12, 46);font-size: 2.7rem; font-weight: 700;">Most Popular Celebrities</h1>
  <div class="cols">

    <div class="Featured-models">
        <img src="https://i.pinimg.com/550x/7a/ec/ed/7aeced1e51d8050084a59ee33f54b5ab.jpg">
        <img src="https://media.insider.in/image/upload/c_crop,g_custom/v1669033779/ds4bbdue5v8qcakdth4c.jpg">
        <img src="https://i.pinimg.com/736x/1e/20/7c/1e207cd73dc408a8ef51df16c493fc45.jpg">
        <img src="https://www.thewikifeed.com/wp-content/uploads/2020/11/rashi-khanna-1.jpg">
        <img src="https://images.mid-day.com/images/images/2014/feb/yami-gautam-L.jpg">
        <img src="https://upload.wikimedia.org/wikipedia/commons/4/40/Rajeev_Khandelwal_at_the_WIFT_felicitation.JPG">
    </div>





			<div class="col" ontouchstart="this.classList.toggle('hover');">
				<div class="container">
					<div class="front" style="background-image: url(http://t2.gstatic.com/licensed-image?q=tbn:ANd9GcQ-laGBW7y3TUvsB3a8amPF4lyTQHbTqIjOHFANpaRA0tcNh4mI3PO9Zd2FM2U_wThLOgySg3uQZGkYxXk)">
						<div class="inner">
							<p>Suniel Shetty</p>
              <span>Indian actor</span>
						</div>
					</div>
					<div class="back">
						<div class="inner">
						  <p>2020:- On 7 November 2020, the Governor of Maharashtra conferred him with the prestigious Bharat Ratna Dr Ambedkar Award for aiding the Dabbawalas of Mumbai during the coronavirus-induced lockdown.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col" ontouchstart="this.classList.toggle('hover');">
				<div class="container">
					<div class="front" style="background-image:url(data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBYVFRgVFhUYGBgZGhoaGBwYGhoaGhkaHhwaHhwcGhocIS4lHB4rIxwcJzgmKy8xNTU1HCU7QDs0Py40NTEBDAwMEA8QHhISHjErJCs0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NP/AABEIAPsAyQMBIgACEQEDEQH/xAAcAAABBQEBAQAAAAAAAAAAAAADAQIEBQYABwj/xAA9EAABAwEGAwYFAgQGAgMAAAABAAIRIQMEEjFBUQVhcQYigZGhsRMywdHwQlIUYuHxI3KCkqLSFbIHwuL/xAAYAQADAQEAAAAAAAAAAAAAAAAAAQIDBP/EACMRAQEAAgIDAAEFAQAAAAAAAAABAhEDIRIxQVETIjJCkWH/2gAMAwEAAhEDEQA/ANvCULkqzJycEi5AKuXLkw5R7/f2WLC97oaPU6AblHtHhrS40AqV4/2r7QvvNocJhjDDRp/mPMotPHHaTxztC68Pl8izHyMHoX7nkqt3GHt+QYRyJHqCqq0vIaNz7KvtbVx1S8dtNyLW8cTec3eZJ91DfewdSoQZKI2xlV4yF5UYXrmpN1v7mEOa4g8ioLrNoTJGhS1B5V632S7aB8WduQHZB5pPI81ug+V88Xd4FV6f2J4/jYLF7pcwUnNzeW8ZeqJ0nLH7G6BTkNj51TgVTOnLkgSoIq5cuQHLly5BOXLlyAihOSJwUNCJVy5MOXBcktbQMaXOMACSToAgMf8A/I3FiyybYMPftKnkwZ+Zp5ry20MCB4nc7q57R8SN4t32pyJhgP6WCjR7nqSqJ70p21k1AnNQijRqlbZ6lWWg7Ozn6oryAPyqUmB+UTQyalLZ6RXAmqGArJl0Lsk9/DXbJeULwqLYfLHkpdjeHscC0lrm1BBgoIsixSH2YeARQj8KNqker9j+Pm82YDvnbR/PZw6wtSx4XiPZy/vu1rjGRo4E0I8F6zcOJNtQC0zO2XnOaJWeWOlzKchWbkVUzpVyRKgnLly5AclXLkBGCUJEqhbly5cgOJhY3tzxbDZ4J+bT7rT363DaciT4Rn5ryHtDfja2rnk0nujlp55pWrxnanvFpvmo9m5daeqfdrIkzoFU6X7ogZST/dCtHx1Rbzagdd/oNlDs24jOiId/EFsWE1Kubjw4vrFFG4dY4ngeK2fDrrQLLPJrjj1tDu/CwBkptnw8ahXDLCid8JYWtWP4zwimJoWTtBhML1S1spWM7UcILf8AEYKarXjz+VjyY/YzJtTuVa8L4w+yMtdTUHI8oVE9yex5W9jCV7Z2X7RtvDQ1xh+QrnGnXM84WpaV4Nwa9uY9rmmNRyIXs/Br/wDFYDrAPUbpY35U5467i0ShNBSq2RUqRcgFXLlyAjJUiVZrcuK5I4oDE9u+KfD/AMNpgvaZ5D+q82tXkklXPau+fFvNo6aYob0GSqGifp90m+M1EdrCSjvcGDCM04wMqpou81cQB79ArHpCwFxU272YEDQV/PzZdaODaDP88k+63S0tJLIpuY/P6JWnjFxwi7d47w2epqVsrhdiAsRc7G8tcS0gkHvVaZIA+hC3nALd7mxatg6Uiiwzne22OXWtJgZRNeIUi1osZxi52j3OLrYNZzcR7KNS093S+tr0wGMbZ2xBQb8GvYaggg5VCyoutzae/buJEfKIHmVcWHDmBgfd3ug/M0mQ4a+PNX4yI8rXnd5Zhc5uxI9U2zU3ilgfjPA0c4/VQrNdM9OazVXvB2guiJBYac8vdei9kLVzP8Jxq2HMO7Tp7eBCwHBrOS0/zDyqt7w8SRaagmOgABHiGk+Sy32vKdNyx0hPCj3d1AjArZznhckXSgjlySV0oCOlSLlmtyj8QtQ2zeeX9FIVF2uvWC7ujN0tHUgwg5O3jt8vOJ7juSgG2IQCaojXlVprtJsnmciiOnP+pUY3otGafdJcZJ5pVU9uLSSBuVOsnOL8GJzLP9TmNJJ00QblYufLhAw1HM5/Rbjgl2xWbXxmCctzKjLKYtccLlGRvtyfZumwc9zaGSHAyInESAJnalFq+AcRe5gxziaYkiMQ3G6u22E0LUy0urQRDRPRY55zKel4YeP0XiV5OCRnCz9kx73hzrMPYP0l+HF5A05a9M9HeLOWwgXayBpFVON12dnxluM8Adb2uNrGWTYAwtqBFKZclK4Nwd9k3CXSPzRaht0GaY+zhVc8r7TMJPTzvi11i1tX7YT4RBWVsluO0TsJtTFMDgTzNQPzdYezXRh3HPyTWUafgzxgjXE0jfY18R5Fb24ZN0AAHjP2XmnDrQjuznUcjv7r0Ls5aOeWscKtLi7wge5KX0svTaXb5RyCOCgsKJK1c9ExLpQ5SgoAkpZQ5XSgaNXLkj3RU5BZqDvN5axpc4wAvPO2fFi8Foof0tzwA5l385FI0HMo3H+NPtbTBZaGBFYOsR+rOugVLxO64LMuzJIxTXMqbl22xx12x9qyKIJeptq3vFRmWeJ0brSUrDWK74Vw11vQOIECafb8qqp1nh8lsewVqCHfyvg9CBB8wo5LZjuL453qp3Z/g7cLgQZa6AD0BmPFaPgF3AL7P9rpHR1feVzbDBa0ycJHXX6IF8vP8NafEyDhhd7j6rmt3e3XPxFvbsDc1GYwuflT3UO58Q+O/Efl0H1Vs4HMOgdJS1sXoy+3ctCrbG0cwiRIJhSL9xIxhrO8Ee6rWXppzdlvp5J9DVaJhBEgqPeG0VdZX4AjC4GaQD9FMtHEo2nKPP8AthbMLbVsnG11mYAphJNS7Q5DnRYtqte1jw6+WxFQHBv+1rQfWVWWey7MZrFxZXeS1uFmXYCNx6SV6P2dBFo90RjGMeJNPT1WF7POHyHMEYehNfRegXBmBzNYOmrSIHqPVR9O+mqYaJ4KCw0TwVqwElKCmApQgCApU0JZQHKr45b4bN9YAAxHlIp5KzIVD2iaW2L5LTOU0+8rK+mmPtgbjfi3FDQXOPOg286nfwTeMMtMLS8gAyQ2DpvzqFoeF8PNlZgFjQdTIn7rM9qeIh7wxuTJHVxNfBRJ23lZ5+pQbF0PnYBEtdvNR7JkmdNVtEX2Le7SSrXsVfMF5DHfLagsP+bNp9x4qneNUGztcD2u/a5rvIg/RFm5ot6sr3QOljSfmaa+cFD49wsW9mW65g8xkhsfTOhg+qu3MBauKOv08fvDreycQx7gQYc3UHadtuq2nZ66vt2Bwtg6hkUBBEUIIzghL2n4FjBtWDvgVH72jTqNPLpQcFxAzhDgaZkO6SFrbNNMbb6um+f2XJJBtKRIMDNZnjtysmWZax5tLQhsNa6gLgZLiKACBz81Y/Fe/wDS+YjvOkRtUoI4eSZfAGwStx+Dxv8AbL/EHsvwnBhc4y7KfciVbce4m2xY+0OTG0G5yAHMmAiB2AA5QvM+2HGTbWnw2nuMNdnP36DLz5IwxuWTHlz1Ns8+0LnFzqlxLj1Jk+qWExqOwLrck7SLheSxwcNM16lwe842NOcjP85heUss9Qt92Otf8ONQY8DUevus77VZ03l3fRSAVBuzqA8qqW0q4yogKeChgpwKaRAnJgSygHErO9ob/YtaWPcC6lBU5zkr29Pwsc7YEryPjfECHvY2sOd3v3Z5nUVyy9FllW2OO6mcb7TF7cFmC3QmIPgNFky0kyURz9zJ1+yjvtilI19Hiy3Ka7lQJQ5NeVcJHtnQOvsojka1MlBeqjLK7ekdiOM/FZ8F577BhG7mZNPUZeW63Vxt6YTmF4Nw2+usbRto3Npy3GoK9j4PxBtuxlqw5jx5g8wublw8ctz06ePLyx1fbQ21nIWSv9z+FaY2iGuPe5O36H3WvsXyFXcQsQZBEg5qd7isbqh3OCAZCJbCFkbxbWlg/Bm3NpnMc+aI6/2jxBMDklpoNxu+SCxh6n6Ly+/si0PMr0O0ZRYvjF2Mlw3WvFdVhyzcVDDVGByKAiNNF0OeJtgVtuEDA4R+pocPHTwIKwd3fotnwO1xvaT+lo9ST9lll7afG/uR7oUxpVddrSDByOvNTmOVxhRwU8FBaUQFUBAU5MBSygFt2YmkbheaN4a3Hb2LmgvcS5pP7TMx4+69LcSqDiXD8No20aJOAh802h3gscmmFeSPsDJbsSOsFAe3vQOniVZ3u0GO0du959Sqj4nennKePbXLpLtGAZaBRLxvyT3WpJKj2r6KpE5ZBOKEUUITlbOmkrWdiOKOsnlhqx5FNnbjqs9dbmXVKvrhcnkhjGOc7QNBJ9FlyZSzxacWNl8nsFwtgWykvzdQo/Dbs5jG4g6YrQ56ol5txEFc8xsncbbm+mf4wwOaDFQVWWYqrO/v91BACFm2ooqW8XXFKurYoIs0S6KxkrbhgJyUZ/CnBai8WYBSF7cs+lVpM6jwlZRtweDQSrzgVuWPAc0gb8ogiPzJTnWDj8rI5lVvEbR1mAAYcfQclUyuV0P043A7R3ZhwOfJFKNeeUUGatrHiNnAIcYMGMJB8iKLzzs/dJAeRX9M6bnqtPYsRnyTG6ibw4r7/wAo3RpPWAiWfE26tI9VVMs04hZzmyH6OLR2bw4SDIT5VDc7yWO5ahXH8Wz9wXRjySxhlx2Ue2cAJKxPajtE0AsY6TrFY5UzV/2htSQ2zDgzFIc79ogk+MAryrito3E4MBDAThnM9VF7umvHj9V97vBcSd1GYx2ZFFpuA9lrW3AeWEA5F/dB6E5+AV9bdiXkfMymkupHRtE55fIqyXu15w9/JAc+Vrr72RvDahmMZjAQabxnHgqK24c5phzS07OBHuq3r2i41XNR7CzBInLVLaWBGiRg/N0/iNaq+sGtAGS9K7C3EMsTaEVe4AH+UbevkvL+H3dr3Ma0nESBHM0XuHDrsLJjGDJja+UE+MkpcWP7ttssutJDjQkaugeYBjnOJMvDGuc6QCIkyAazAI2gNJStd8k83nyJ/wDsh2go4audhG/6Wf8AZboV154RZPaO6WF1QW6ZukjL5Y0zKo79wV9nJBxN3pM6iNwtbavgudo0f/qP/QKFee62DoCXczr9vBZ58WN+KxysYq2b3gE28WgYOadaOrKAbPEZXE6Ihtu5e6XZbK3u12YwZBDsmBqMSjZUK83gAGFiOI2mO0JBkCnl/Vanir8DHO5R5rGMGi24Z/Y5G74TYwxg/lb7K6sWKBdWwArWwFFzW7uzpzWqZZcOc4S7utFZOcdFMuN0DRjdnoNtp5qU5vddNaiacgPDJdXFwbm8v8c+WfyK9nDmVJx0E1gekSmfwLP5/wDcxWNq+rv8o8ZTcDufk5dH6eP4Z7rK9q7QvDWAakk84qOkFVnZTgzLa1No9oLGRhaahz6GSDsIPipHam2AMDINIHjE/nJWX/x+0uu7nautHezQufCbyab1i0mH3+iDamjt5Vm27tAqJOspRZDYeX3rp6rqQobWrmjRglQ7UMexxexrhJIDmgidOY8FqHWLdQPJRbxw9h0Hgke2H4t2WsXh3wyWOgECDh1pyyWE4pwS1u7jjacIPzCreXTxXsF44eRJacwRBqIjUBNuVwdhm1gggDDAqfyqVxnwMt2A4IXvZeHNhoEjm7IEcl6LaCjo1IYPb6u8kt2smsaAAABoBQAbLiPlGtXen3enjj4wrduzcdg0D/c77AeaE2uDnLj4g/V4XPPdfGpIGuQwj1P5q4GHHk2n+53/AECYDecgdXT4Al3sGBVPG7fAx51PdHnBj1KtbQ94cmn3YPYeqzvaF/dY3UmT5f1Ucl1jTxm7GfBRmIQKeHLhdIkIgagscpLVFCk7RvDbIgiS4gDlrPoslYmHt6/ULVdrXjA0al1OUAz+c1knnX8quzhn7Dr0XF8g3PsCfotTw26QA93Vo5fuKouzFw+Mxlu/5G1a397oPoJWwwyRlFcvzZLh4f7ZMuTP5DmitZNfOPdR7a0q5v8ANpmKZecCEt7tg1tdHab/AJ7oF1snk43OzrApJg+Iz8IXY5xms1dGeJ05E5gVTP4nn6hGDGhsYRFM6yY9/DVBxN2Z5t+6kmD7Wse+1LGiTnAzgAk+mi1nYVrBdGYDNXyeeIzRVdswC9B51Dx4BoiP+QVt2MsXMsXYgRitHkDYGMuWa5eL21t/a0bT+f1TXPRWsTLQtbmuhAL3lCc9w5KU2TXDHWB/VDtLPmKbVp7DyRo9BMsyRLo5Dc89kM0IyLjQO/SJE02U97ZaImIGsRsYPNVz34TSkSXAwATs4b5wQmSXhkQOTR9T+bJCe8SchH1efQIjGxHIR5prxQjc/noUwBhowHcOPh3j7hMfPfIziPHA8+7lYuZXLSPv7qLashpEVOI+jgkEK1dJGxaT6sI9Csv2itJtA3ZvuVqbdkBmkRzMGR7eyxfHnf47x09gsuf+K+P+SCXJcSE9yax8rjdCbZlSmFQrFSgaKDZ7tXbA4Ga59Bl6/RM7I9nDe3y4H4LD3yJBcYkNBHhJ26qX/wCLdfL0GNkNYG/Ed+1szA5mfyF6Rc7qyyY1lm0MYKAARXMk6kmddiu/hx/bGeeWpoa7sa1rWhoDB3GtAEAAREdAPNHHdbinKExgrGQoRmNRHXRLeHxMmnzbAAEDEToQJpqt3PVXa23xLUj9LDB/mIoTl1VtZt/PzSvqqXgjMRLmglpJNQMidfAq+IQKE8+n0/PfJNr+70P3T3eCH3uXkUJUfGrmcIe2hY9x/wBDu670M+Cuezl2eyyBf82J50BILiQTGpEFHZZBxg5a+SlvcAKrDjx72cy3NOtrcNEk8+g3yz/oq+6vfaHHDAJ7geHEhsaiBDiiXPvn4hcYkgNin+auesKa925p0+61XvQLg+KvM7tw8twVCtWPFC+di5oGu4oaKVavmWCAcgaQOuxQAySJ+UUJNDO8bc0xKPwouLC14mpgtBAI6SY8EDiTAWkZ4m1FSKQDBOhn0Uljy10iJbGITTCcjEZqRerLXOtJjXTLLIoTfaHY28iuYifHL3RJmDpSZ+ij2r6nWN9NU9h3n1QE2yfJr1+yHaR5fmn+pNYYB3TXu1MQM/tU6iAPEpBHtW6cm/Xx0KxnHLqXWj3t0MEa5Co8NFtryK/06Gg6k5rDX69Fl5dIgOd7UBH3SyxmU1VY3VUd4fAQbvaSVf8AGOF42G0swS79TQKmP1Ab8tVlLs+q5M8Lj1W2OW1/YFTbCxc9wY0ST+SeSr7uCYAEk0C2dwuPwmYTBc7594OnTRTx8fll/wAPLLUFuVzbZMDGAZy86uduef0AUzkcjkfTUZ5pjaH+3LSaaJzGS4M5gjoDypuu6TU0wGa2GS7UZUyz8+iquLNfbPZdmGrjjtXbMBivWIG8Hmri+PDWnQAa7DedIjzUPs8wljrZwg2hxAmhwD5BXl6kqkrO63VlkwMbQDfM8zuU8wRTaYipGuoQbe1DaVLttSB7feFGsw8957g2neANGAZAk67ymWhLZsaa7HXLRCrz9EgYQ0mYgECCYOIydNDlGepS/Ffs/wD4/dItJNme8EO+u7pg5Z/nilO+yFebqXkFsYgRU6iRM9B7LLC9aGKfZQ1gl1GgCaBDe6jiaho08Y8s5RXioFIPdcMzy6UUO8OEWkExIEjOf2wKxp4K1yG3ayxNwyZIxcyQaVry5Gcke3ePmyDu44VFd55fVPundxOjJ0E5ktDRBO3RNtbMBxFcD6SHT3jnQ8vZMfSWbiKzVufe/QayfAeYKnPEt0OeuY6+Xmq27vkwYxDuvDhBc0mGn091ZXecAodq50/sgqq7dvpnSZJkippn9ExpAqaZyT9FJvIrnuft5UPgq1wxya4YMCB511M9KoCU22JNGyJjxkCa55+iBbtc9neiSJgSWg1jOCTG+4Umzz8R7jfpomvEefs0b55GqQ2U2mJmOtQJ6wa78j4LNcRuItGmkvaSWnXp5eFFdMf/AIf+6vKfsPRRrEZnf+n9R4JmpeEWxhoO0EHfLzlB492e+IfjWIGKJe0H5ubf5vefOZeLNjLSQe8+paY1jTOJmitrq7mayN6/dLLGZTVVL9UHZi6wDaPFROAGkEfNO2UeBWnsuWX03J3z81HvtzLu+zSpbkDOZB3S3W0Apl5UrH0KWOMxmoLd3aW4UIryzGiPc7OmM5mk0FPz3QrJuIgZR7fkKZbGB/an5TyCqIqtv8Pc2zNWuNa5sGk7GQPFWN5tgweQApnkB9TtRVN2eHWr3n5WNiZ0zPuFa2DMTpLRLZcdQXuBxEE56iqo9OsrHDJcZcTMnKTOFoG2vVK4E0yLquziCIoagZaIx9Klw9QKob8tZdInvSNRl/RCQXkONflbpWZyP0TPjHf3+6I8ScOkc6yJgjwUf+Ps/wBjf+H/AGSJIKNYCldc8hAFSeQQ2iTCO80cBo0AdToRNSeixwneyxnZjx3C6nzBziIECkkSDpn4ptpOJ9YkNcDX5Z2Io6gRrSzq5sGHNBxDMBvOZJnYILZOExJcyueFzhkJOREZkLVpEq7sABECMRB8YPufVRrexLmuYQC5plknKTIh3L+2Sk2RmdcQadnDQk1rUBNtmd4FohxEyQSzNuLFXOBHKPMJV48UmujXAx3cOLvN1NZFVeNMNHhllmMlAs7EMM1JccyJoZJqI7tTmjOaAB3qbaEctUC1DvhxHCNTBOwE5+QHikNnDctNp5kenRSHilKD1NfdDtMvbntl+UQAGGseHpodMvZOtjr195z6H3SMZ56U1odaZ4U619vz7eqArrwYZGU0HifsmMaQ0TURnltp5qFxC3m0YzOAXRvpTmJz5hWNkcTd6UO9OlD/AH3TNAvN3Dzs5sYTsYyO45dETh76AH5hMjY/kId2f3zP7vb+ydaAsfjrDmgHk4R4CZjwSVFvd3ddNUO/XAul7JB/bSv2KSwdPkFZWcVoMx+dfsgqhcFdiYXOEGragaGPzoiX600HT89PJGtrHNzaOoXCeWR+6qLe9S+CIIzH4M04kS4gND3c58O7PhFCrS4xgnQknyNaeHqqu7vEPaZiZIpVpbGuX7v9JVncrLBZsZMw1jZ3pUnrX8KaqO/Sf8xPTfTL81QnOIl0Q7JvOKjXbeE59oKxm4xyIA9KapjnNk5YWDKmYrI8EMwXiBgbrVw1GooJpmifwjf3f+33TS+BjzJ+WpqOggZH+6ifwXI+Q/6JBYWIrOwKkT6vDeoGwnMRU8ihXXJ3T7p95o1x2e2OVQs8J0MfRLZwBY893A7C94wCGgfqJ+VpMZVy3TAcMgiSx2OACWuDsgHOoHVy0Rb6cItYpAB8ZFfRE+EC4yJxNEjQxh0yVqMMNGpAljnfqaCAQDGZlwUp7KEef5rohGhcf5Z8YFVI0jkgqhvids/zPMgdeijsERpO9fY/dSX5/wCo+0oGUePP3QDY1/PJR7V4BwzJIoMz4iKCmuyW0q4jTbwehYBOWgHo53uZQYt1JOMuAMRETOESY6yJTb7aYASZOGMsycqV5DzTru7vv6fdA4v8p/zD3KYZq/vl7Hnuvc/utGgIMzTorq5ZTvmBvnnzz69VneK52fJ7PZaG5UJ6fVFUrL8PhvnQnEDoZM0/NlZXiybaM8RFecA8s81H7RsHwiYycY5ZqJw+8OAb3jU/ZILa7MLHlpqCRhO/VWrDSNyq52bOv3Uyy0HM+6DotraxiggQBXOtc+eniod5a1zZIBNOUHkfzJOtnd1/UDwjJQL08w4T+j7plIALu8OLmOmnykD5hlB3gkeK0fxWASYynlp9FWcHYDEjQq1ZlHREK/g0saTHIExEjk4zsgusIE/pbUAZEDWUa3+UGBtkNlFs3nFE0FpAGwpQISTFPfd/pG+k+yH/ABj/AMA/7pxMvINYc4DlQI+EbDyCCf/Z)">
						<div class="inner">
							<p>Disha Patani</p>
              <span>Indian actor</span>
						</div>
					</div>
					<div class="back">
						<div class="inner">
							<p>- BIG Zee Entertainment Award in the category Most Entertaining Actor (Film) Debut Female for M.S. Dhoni: The Untold Story</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col" ontouchstart="this.classList.toggle('hover');">
				<div class="container">
					<div class="front" style="background-image: url(https://upload.wikimedia.org/wikipedia/commons/9/94/Kajol_in_October_2021.jpg)">
						<div class="inner">
							<p>kajol</p>
              <span>Actor</span>
						</div>
					</div>
					<div class="back">
						<div class="inner">
							<p>Kajol started her acting career withRahul Rawail's Bekhudi in the year 1992 where she played the role of Radhika. She was seen in several commercially as</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col" ontouchstart="this.classList.toggle('hover');">
				<div class="container">
					<div class="front" style="background-image: url(http://t2.gstatic.com/licensed-image?q=tbn:ANd9GcSYI2KOgKGCwRV9Rfv1xBtRkwaEotXkWx2lH8nkyB_Jg1KSgg5KHHOUQGkcc1-RnGx863vFurUH9rAEuaA)">
						<div class="inner">
							<p>Trisha Krishnan</p>
              <span>Actor</span>
						</div>
					</div>
					<div class="back">
						<div class="inner">
							<p>Trisha Krishnan is a famous Telegu and Tamil actress. Trisha first made her debut in films when she was offered a small cameo in the film Jodi. Her first </p>
						</div>
					</div>
				</div>
			</div>
			<div class="col" ontouchstart="this.classList.toggle('hover');">
				<div class="container">
					<div class="front" style="background-image: url(https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/Ranbir_Kapoor_at_the_trailer_launch_of_Shamshera.jpg/200px-Ranbir_Kapoor_at_the_trailer_launch_of_Shamshera.jpg)">
						<div class="inner">
							<p>Ranbir Kapoor</p>
              <span>Actor</span>
						</div>
					</div>
					<div class="back">
						<div class="inner">
							<p>Dancing, Playing Golf, Doing the Workout, Swimming</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col" ontouchstart="this.classList.toggle('hover');">
				<div class="container">
					<div class="front" style="background-image: url(https://www.bollywoodbiography.in/wp-content/uploads/2017/06/Aishwarya-Rai.jpg)">
						<div class="inner">
							<p>Aishwarya Rai Bachchan</p>
              <span>Actor</span>
						</div>
					</div>
					<div class="back">
						<div class="inner">
							<p>Aishwarya Rai was crowned as Miss World in 1994 and she is considered as one of the most loved actress even today.She started off her acting career in 1997</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col" ontouchstart="this.classList.toggle('hover');">
				<div class="container">
					<div class="front" style="background-image: url(https://cdn.siasat.com/wp-content/uploads/2021/06/Kiara-Advani.jpg)">
						<div class="inner">
							<p>Kiara Advani</p>
              <span>Actor</span>
						</div>
					</div>
					<div class="back">
						<div class="inner">
							<p>Alia Advani, known professionally as Kiara Advani, is an Indian actress who works in Hindi and Telugu language films</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col" ontouchstart="this.classList.toggle('hover');">
				<div class="container">
					<div class="front" style="background-image: url(https://images.hindustantimes.com/img/2022/09/14/1600x900/Jacqueline_Fernandez_1661957603143_1663171025451_1663171025451.jpg)">
						<div class="inner">
							<p>Jacqueline Fernandez</p>
              <span>Actor</span>
						</div>
					</div>
					<div class="back">
						<div class="inner">
							<p>Jacqueline Fernandez is a former model and she claimed the Miss universe Sri Lanka beauty pageant in the year 2006</p>
						</div>
					</div>
				</div>
			</div>
		</div>
 </div>
</div>

</body>
</html>