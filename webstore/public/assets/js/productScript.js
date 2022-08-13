var i = 0; //increment cart number

function incrementCheckout(){

    i++;
    //$("#checkoutNum").text("(" . i);
    $('#submitCheckout').val("Checkout (" + i + ")");

}

  $("#id1").click(function(){ //smartphone button
    //alert("Added to cart! 1");

    $("#id1").attr("disabled", true);

    var $this = $(this);
    $this.toggleClass('.card button');
    if($this.hasClass('.card button')){
        $this.text('Added');         
    }

    $(this).css('opacity', '0.3');

    incrementCheckout();

    $("#smartphoneinput").val("smartphonepost");

  });

  $("#id2").click(function(){ //laptop button
    //alert("Added to cart! 1");

    $("#id2").attr("disabled", true);

    var $this = $(this);
    $this.toggleClass('.card button');
    if($this.hasClass('.card button')){
        $this.text('Added');         
    }

    $(this).css('opacity', '0.3');

    incrementCheckout();

    $("#laptopinput").val("laptoppost");

  });

  $("#id3").click(function(){ //battery pack button
    //alert("Added to cart! 1");

    $("#id3").attr("disabled", true);

    var $this = $(this);
    $this.toggleClass('.card button');
    if($this.hasClass('.card button')){
        $this.text('Added');         
    }

    $(this).css('opacity', '0.3');

    incrementCheckout();

    $("#batterypackinput").val("batterypackpost");

  });

  $("#id4").click(function(){ //smartwatch button
    //alert("Added to cart! 1");

    $("#id4").attr("disabled", true);

    var $this = $(this);
    $this.toggleClass('.card button');
    if($this.hasClass('.card button')){
        $this.text('Added');         
    }

    $(this).css('opacity', '0.3');

    incrementCheckout();

    $("#smartwatchinput").val("smartwatchpost");

  });

  $("#id5").click(function(){ //headphones button
    //alert("Added to cart! 1");

    $("#id5").attr("disabled", true);

    var $this = $(this);
    $this.toggleClass('.card button');
    if($this.hasClass('.card button')){
        $this.text('Added');         
    }

    $(this).css('opacity', '0.3');

    incrementCheckout();

    $("#headphonesinput").val("headphonespost");

  });

  $("#id6").click(function(){ //wireless charger button
    //alert("Added to cart! 1");

    $("#id6").attr("disabled", true);

    var $this = $(this);
    $this.toggleClass('.card button');
    if($this.hasClass('.card button')){
        $this.text('Added');         
    }

    $(this).css('opacity', '0.3');

    incrementCheckout();

    $("#wirelessinput").val("wirelesspost");

  });

  $("#id7").click(function(){ //bluetooth speaker button
    //alert("Added to cart! 1");

    $("#id7").attr("disabled", true);

    var $this = $(this);
    $this.toggleClass('.card button');
    if($this.hasClass('.card button')){
        $this.text('Added');         
    }

    $(this).css('opacity', '0.3');

    incrementCheckout();

    $("#bluetoothinput").val("bluetoothpost");

  });