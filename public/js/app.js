$('.add_images').click(function()
{
    all=$('input[name="preview[]"]');
    if(all.length==11) return; //ограничим количество картинок 1 превью и 10 дополнительных картинок.
    field=$('input[name="preview[]"]:first').clone(); // клонируем поле preview
    //field=$('div[name="prev"]:first').clone();
    $(this).after(field); //вставляем поле после кнопки

});

