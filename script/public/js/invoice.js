$(function() {
    $('div.myText').on('click', function(event) {
        var div = $(this);
        var tb = div.find('input:text');//get textbox, if exist
        if (tb.length) {//text box already exist
            div.text(tb.val());//remove text box & put its current value as text to the div
        } else {
            tb = $('<input>').prop({
                'type': 'text',
                'value': div.text()//set text box value from div current text
            });
            div.empty().append(tb);//add new text box
            tb.focus();//put text box on focus
        }
        event.stopPropagation();
    });
});