(function($){
	$(document).ready(function(){
		

        //zmiana tekstu w divie po klikaniu na link w Metody
        var linkTerapia = $("main>div>ul>li:nth-child(1)"),
            linkMasaz = $("main>div>ul>li:nth-child(2)"),
            linkTrening = $("main>div>ul>li:nth-child(3)"),
            linkGimnastyka = $("main>div>ul>li:nth-child(4)"),
            linkBiurowy = $("main>div>ul>li:nth-child(5)"),
            linki =$("main>div>ul>li");

        var terapia = $("main>div>div:nth-child(1)"),
            masaz = $("main>div>div:nth-child(2)"),
            trening = $("main>div>div:nth-child(3)"),
            gimnastyka = $("main>div>div:nth-child(4)"),
            biurowy = $("main>div>div:nth-child(5)");
        
         
        //menu w metodach dla szer >980
         if($(window).width()<980) {
         masaz.show();
         trening.show();
         gimnastyka.show();
         biurowy.show();
        } else {
         linkTerapia.addClass("activeMetody");
         terapia.show();
         masaz.hide();
         trening.hide();
         gimnastyka.hide();
         biurowy.hide();
        }

         linkTerapia.on("click", function(){
            terapia.show();
            masaz.hide();
            trening.hide();
            gimnastyka.hide();
            biurowy.hide();
            linki.removeClass("activeMetody");
            linkTerapia.addClass("activeMetody");
         });
         linkMasaz.on("click", function(){
            terapia.hide();
            masaz.show();
            trening.hide();
            gimnastyka.hide();
            biurowy.hide();
            linki.removeClass("activeMetody");
            linkMasaz.addClass("activeMetody");
         });
         linkTrening.on("click", function(){
            terapia.hide();
            masaz.hide();
            trening.show();
            gimnastyka.hide();
            biurowy.hide();
            linki.removeClass("activeMetody");
            linkTrening.addClass("activeMetody");
         });
          linkGimnastyka.on("click", function(){
            terapia.hide();
            masaz.hide();
            trening.hide();
            gimnastyka.show();
            biurowy.hide();
            linki.removeClass("activeMetody");
            linkGimnastyka.addClass("activeMetody");
         });
          linkBiurowy.on("click", function(){
            terapia.hide();
            masaz.hide();
            trening.hide();
            gimnastyka.hide();
            biurowy.show();
            linki.removeClass("activeMetody");
            linkBiurowy.addClass("activeMetody");
         });



		var nav = $("nav"),
			navTop = nav.offset().top,
			navLeft = nav.offset().left,
			navHeight = nav.outerHeight(),
			blockHeight = $("blockquote").outerHeight(true),
			dom = $("#social"),
			domHeight = dom.outerHeight(),
			oMnie = $("#oMnie"),
			oferta = $("#oferta h2"),
			metody = $("#metody h2"),
			kontakt = $("#kontakt"),
			oMnieTop = oMnie.offset().top-1.5*navHeight,
			ofertaTop = oferta.offset().top-1.5*navHeight,
			metodyTop = metody.offset().top-1.5*navHeight,
			kontaktTop = kontakt.offset().top-1.5*navHeight,
			linkDom = $("nav ul li:nth-child(2)"),
			linkOMnie = $("nav ul li:nth-child(3)"),
            linkMetody = $("nav ul li:nth-child(4)"),
			linkOferta = $("nav ul li:nth-child(5)"),
			linkKontakt = $("nav ul li:nth-child(6), button");

			linkDom.addClass("section");

			//obługa linków głownego menu
            linkDom.on("click",  function(event) {
                $(window).scrollTop(0);
            });
			linkOMnie.on("click",  function(event) {
				$(window).scrollTop(oMnieTop);
			});
			linkOferta.on("click",  function(event) {
				$(window).scrollTop(ofertaTop);
			});
			linkMetody.on("click",  function(event) {
				$(window).scrollTop(metodyTop);
			});
			linkKontakt.on("click",  function(event) {
				$(window).scrollTop(kontaktTop);
			});
			$("header div div:first-child").on("click",  function(event) {
				$(window).scrollTop(ofertaTop);
			});
			$("header div div:last-child").on("click",  function(event) {
				$(window).scrollTop(kontaktTop);
			});


		//zmiana wartosci offset top po zmianie wielkosci strony

		$(window).resize(function(){
			var navTop = nav.offset().top,
				navLeft = nav.offset().left;
				navHeight = nav.outerHeight(),
				blockHeight = $("blockquote").outerHeight(true),
				oMnieTop = oMnie.offset().top-1*navHeight,
				ofertaTop = oferta.offset().top-1*navHeight,
				metodyTop = metody.offset().top-1*navHeight,
				kontaktTop = kontakt.offset().top-1*navHeight;

        //kontakt tło
                var div1 = $("#photo"),
                    div1Height = div1.innerHeight();
                var div2 = $("#form"),
                    div2Height = div2.innerHeight();

                if(div1Height >= div2Height){
                    div2.css("height", div1Height);
                } else {
                    div1.css("height", div2Height);
                }

        //menu
        $(document).on("scroll", function(){
             var scrollVal = $(document).scrollTop()+1;
             if(scrollVal >= navTop){
                nav.css("position","fixed");
                nav.css("top", "0");
                nav.css("left", navLeft); 
                dom.css("height", domHeight + navHeight);
             } else {
                nav.css("position", "relative");
                nav.css("left", 0);
                dom.css("height", domHeight);
             }
         });

        //metody
        if($(document).width()<=980) {
         masaz.show();
         trening.show();
         gimnastyka.show();
         biurowy.show();
        } else {
         linkTerapia.addClass("activeMetody");
         terapia.show();
         masaz.hide();
         trening.hide();
         gimnastyka.hide();
         biurowy.hide();
        }
            });

        //Menu -> menu fixed
        $(document).on("scroll", function(){
        	 var scrollVal = $(document).scrollTop()+1;
        	 if(scrollVal >= navTop){
        	 	nav.css("position","fixed");
        	 	nav.css("top", "0");
        	 	nav.css("left", navLeft); 
        	 	dom.css("height", domHeight + navHeight);
        	 } else {
        	 	nav.css("position", "relative");
        	 	nav.css("left", 0);
        	 	dom.css("height", domHeight);
        	 }
        //menu link podswitla sie na danym kontencie

        	 if((scrollVal >= oMnieTop) && (scrollVal < metodyTop)){
        	 	linkOMnie.addClass("section");
        	 	linkDom.removeClass("section");
        	 	linkMetody.removeClass("section");
        	 	linkOferta.removeClass("section");
        	 	linkKontakt.removeClass("section");
        	 } else if((scrollVal >= metodyTop) && (scrollVal < ofertaTop)) {
        	 	linkOMnie.removeClass("section");
        	 	linkMetody.addClass("section");
        	 	linkOferta.removeClass("section");
        	 	linkDom.removeClass("section");
        	 	linkKontakt.removeClass("section");
        	 } else if((scrollVal >= ofertaTop) && (scrollVal < kontaktTop)) {
        	 	linkKontakt.removeClass("section");
        	 	linkMetody.removeClass("section");
        	 	linkOferta.addClass("section");
        	 	linkDom.removeClass("section");
        	 	linkOMnie.removeClass("section");
        	 } else if (scrollVal >= kontaktTop) {
        	 	linkKontakt.addClass("section");
        	 	linkMetody.removeClass("section");
        	 	linkDom.removeClass("section");
        	 	linkOMnie.removeClass("section");
        	 	linkOferta.removeClass("section");
        	 } else {
        	 	linkDom.addClass("section");
        	 	linkOMnie.removeClass("section");
        	 	linkOferta.removeClass("section");
        	 	linkKontakt.removeClass("section");
        	 	linkMetody.removeClass("section");
        	 }
    	});
       
       //kontakt tło
        var div1 = $("#photo"),
        	div1Height = div1.height();
        var div2 = $("#form");
        	div2Height = div2.height();

        if(div1Height >= div2Height){
        	div2.height(div1Height);
        } else {
        	div1.height(div2Height);
        }


          var przyslowia = ["W zdrowym ciele zdrowy duch.", "Poczucie zdrowia zdobywamy tylko przez chorobę.", "Szczęście to po prostu dobre zdrowie i zła pamięć.","Im mniej nienawiści, tym więcej zdrowia.", "Ruch może zastąpić  wszystkie lekarstwa, ale żadne lekarstwo nie jest w stanie zastąpić ruchu.", "Ślachetne zdrowie, nikt się nie dowie / Jako smakujesz, aż się zepsujesz."];
          var autorzy = ["- Juwenalis","- Georg Christoph Lichtenberg", "- Ernest Hemingway", "- Ali Ibn Abi Talib", "- Wojciech Oczko", "- Jan Kochanowski"];
          setInterval(function(){ 
                var number = Math.floor(Math.random() * 5);
				var cytat = $("blockquote h2");
                var autor = $("blockquote h3");
                cytat.text(przyslowia[number]);
                autor.text(autorzy[number]);
          }, 4000);


        //Rozwijanie menu dla tabletów i komórek
        $("#menuButton a").on("click", function(){
           $("nav ul li").toggleClass("displayBlock");
        });

        if($(document).width()<=980) {
            $(".buttonMenuHide").on("click", function(){
                $("nav ul li").toggleClass("displayBlock");
            });
        }


        //sekcja- oMnie skaczace kolory
        var numer = 1;
        setInterval(function(){ 
                $('#oMnie div:nth-child('+numer+') div').css("background-color", "#08A7F2");
                numer+=1;
                if(numer==5) numer=2;
                $('#oMnie div:nth-child('+numer+') div').css("background-color", "#08F2B0");
                $("button").toggleClass("animated flash");
          }, 4000);

});
})(jQuery);