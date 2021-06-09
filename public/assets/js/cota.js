function getBourseInfos(){

    var euronextAPI = "https://gateway.euronext.com/api/instrumentDetail?code=FR0013310281&codification=ISIN&exchCode=XPAR&sessionQuality=RT&view=FULL&authKey=13692f2343175995a3ddbe6749d648be9c128232986f0fe1054a7272a9047f7d";

    jQuery.getJSON( euronextAPI , {
        format: "json"
    }).done(function( data ) {
      if(jQuery('#cotationHome').length){
        jQuery('#cotationHome').html(data.instr.currInstrSess.lastPx + '&euro;');
      }
      if(jQuery('#cotationBourseContent').length){
        jQuery('#cotationBourseContent #price').html(data.instr.currInstrSess.lastPx + '€ | OCTOPUS ROBOTS share Price - BLOOMBERG');
		  jQuery('#cotationBourseContent #price2').html(data.instr.currInstrSess.lastPx + '€');
		  

		  jQuery('#cotationBourseContent #highprice').html(data.instr.perf[5].highPx + '&euro;');//COURS LE PLUS HAUT
		  jQuery('#cotationBourseContent #volumeexchange').html(data.instr.currInstrSess.tradedQty);
		  	var try1 = (data.instr.perf[2].var * 100);
		  	var tr2 = Math.round(try1 * 100) / 100;
		  	jQuery('#cotationBourseContent #variation2').html(tr2 + '%');
		  
		  	jQuery('#cotationBourseContent #closingprice').html(data.instr.currInstrSess.prevAdjClosingPrice);
			jQuery('#cotationBourseContent #variation').html(data.instr.perf[2].var);
		  
		  
		   var $chVariation = $('#cotationBourseContent #ch-valeur');
		   $cours2 = data.instr.perf[2].var * 100;
           $rounded_variation = Math.round($cours2 * 100) / 100;
		    if (!isNaN($rounded_variation)) {
            if ($rounded_variation > 0) {
               $chVariation.addClass('green1');
               $chVariation.removeClass('red');
               $rounded_variation = '+' + $rounded_variation;
            }
            else if ($rounded_variation === 0) {
              $chVariation.removeClass('green1');
              $chVariation.removeClass('red');
            }
            else {
              $chVariation.addClass('red');
              $chVariation.removeClass('green1');
            }
            $rounded_variation += '%';
            $chVariation.html($rounded_variation);
          }
		  
		 
		   
		
          
		  
		   
		
		  
		  
        jQuery('#cotationBourseContent #price-top-date').html('Le' + ' ' +data.instr.currInstrSess.dateTime);
        jQuery('#cotationBourseContent td#cloture-veille').html('&euro; ' +  data.instr.prevInstrSess.lastPx + ' ' + '['+(data.instr.prevInstrSess.dateTime).substring(9)+']');
        jQuery('#cotationBourseContent td#ouverture-prix').html('&euro;' + data.instr.currInstrSess.openPx);
        jQuery('#cotationBourseContent td#performanceyear').html('&euro;' + data.instr.perf[5].lowPx + ' ' + '-' + ' ' + '&euro;' + data.instr.perf[5].highPx);
        jQuery('#cotationBourseContent td#capitalchange').html(Number(data.instr.perf[0].tradedAmt).toFixed(2).toString() + '&euro;');
        jQuery('#cotationBourseContent td#transactionsvalue').html(data.instr.currInstrSess.nbTrades);
        jQuery('#cotationBourseContent td#transactionsquantity').html(data.instr.currInstrSess.tradedQty);
        jQuery('#cotationBourseContent td#highPricevalue').html('&euro;' + data.instr.perf[0].highPx + ' ' + '['+(data.instr.perf[0].highPxDtTm).substring(9)+']');
        jQuery('#cotationBourseContent td#lowPricevalue').html('&euro;' + data.instr.perf[0].lowPx + ' ' + '['+(data.instr.perf[0].lowPxDtTm).substring(9)+']');
        jQuery('#cotationBourseContent td span#bidPricevalue').html('&euro;' + data.instr.ordBook.bsBidPx);
        jQuery('#cotationBourseContent td span#askPricevalue').html('&euro;' + data.instr.ordBook.bsAskPx);
        jQuery('#cotationBourseContent td span#bidVolumevalue').html(data.instr.ordBook.bsBidQty);
        jQuery('#cotationBourseContent td span#askVolumevalue').html(data.instr.ordBook.bsAskQty);
        jQuery('#cotationBourseContent td span#date-bid').html((data.instr.ordBook.bsBidDtTm).substring(9));
        jQuery('#cotationBourseContent td span#date-ask').html((data.instr.ordBook.bsAskDtTm).substring(9));
        jQuery('#cotationBourse').hide();
        var str = Number(data.instr.currInstrSess.marketCapitalisation).toFixed(2).toString();
        var res = str.substring(0,3) + 'M&euro;';
        jQuery("#cotationBourseContent td#marketCapvalue").html(res);
      }
    });
}

jQuery(document).ready(function() {

    if(jQuery('#cotationHome').length || jQuery('#cotationBourseContent').length){

        getBourseInfos();
        setInterval(function() { getBourseInfos(); }, 30000);

        jQuery('div#transition-bourse').mouseover(function () {
            jQuery("div#cotationHome").css("display", "none");
        });

        jQuery('div#transition-bourse').mouseout(function () {
            jQuery("div#cotationHome").css("display", "block");
        });

    }

});

