let LikeButtonIconList = document.querySelectorAll("a .fa-heart");
for(let LikeButtonIcon of LikeButtonIconList){
    let a = LikeButtonIcon.closest(".card-iconlink");
    a.addEventListener('click', like);
}
function like(e){
    e.preventDefault();
    let likeurl = this.href;
    var icon = this.querySelector(".fa-heart");
    fetch(likeurl)
        .then(
            function(response){
                return response.text();
            }
        )
        .then(
            function(data){
                console.log(data);
                if(data === 'like'){
                    icon.classList.add('fas');
                    icon.classList.remove('far');
                }
                else if(data === 'dislike'){
                    icon.classList.add('far');
                    icon.classList.remove('fas');
                }
            }
        )
        .catch(
            function(error){
                console.log(error);
            }
        )
}
let BookmarkButtonIconList = document.querySelectorAll("a .fa-bookmark");
for(let BookmarkButtonIcon of BookmarkButtonIconList){
    let a = BookmarkButtonIcon.closest(".card-iconlink");
    a.addEventListener('click', bookmark);
}
function bookmark(e){
    e.preventDefault();
    let url = this.href;
    var icon = this.querySelector(".fa-bookmark");
    fetch(url)
        .then(
            function(response){
                return response.text();
            }
        )
        .then(
            function(data){
                if(data === 'bookmark-on'){
                    icon.classList.add('fas');
                    icon.classList.remove('far');
                }
                else if(data === 'bookmark-off'){
                    icon.classList.add('far');
                    icon.classList.remove('fas');
                }
            }
        )
        .catch(
            function(error){
                console.log(error);
            }
        )
}