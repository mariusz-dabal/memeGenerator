$('.meme').on('click', function (e) {
    var meme = $(e.target);
    var memeSrc = meme.attr('src');
    var memeId = meme.data('id');
    var memeTitle = meme.data('title');

    var modalId = $('.modalId');
    var modalImg = $('.modal-img');
    var modalTitle = $('#modalMemeTitle');

    modalId.val(memeId);
    modalImg.attr('src', memeSrc);
    modalTitle.text(memeTitle);
});