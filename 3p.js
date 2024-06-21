// let header_button = document.querySelector(".icon");
// header_button.addEventListener("click", function (){
//     let header = document.querySelector("header");
//     if(header.classList.contains("open")){
//         close_menu();
//     }
//     else{
//         header.classList.add("open");
//         header_button.querySelector("img").src="free-icon-menu-bar-7782682.png"
//     }
//
//
//
// });
//
// // document.querySelector(".ss").addEventListener("click", () =>{
// //     document.querySelector("header").classList.remove("open");
// // });
// //
// // document.querySelector("header .ss").addEventListener("click", () =>{
// //     document.querySelector("header").classList.remove("open");
// // });
//
// function close_menu(){
//     document.querySelector("header").classList.remove("open");
//     header_button.querySelector("img").src="free-icon-menu-bar-7782682.png"
// }
//
// document.querySelector(".ss").addEventListener("click", close_menu, false);
//
// document.querySelector("header .ss").addEventListener("click", close_menu, false);
//
//



document.querySelector("#show_add_photo").addEventListener("click", function (){
    document.querySelector("#add_new_photo").classList.add("open")
});
//
document.querySelector("#cancel").addEventListener("click", function (e) {
    e.preventDefault();
    document.querySelector("#add_new_photo").classList.remove("open");
});

function open_photo(){
    let popup_photo= document.querySelector("#popup_photo");
    popup_photo.querySelector("img").src=this.querySelector("img").src;
    popup_photo.classList.add("open");
}


    document.querySelector("#popup_photo").addEventListener("click", function () {
        this.classList.remove("open");
    })


//
// document.querySelector(".add_photo").addEventListener("click", function () {
//     let src = document.querySelector(".photo_src").value;
//     let text = document.querySelector(".input_text").value;
//
//     if(src) {
//         let new_photo_div = document.createElement("div");
//         new_photo_div.classList.add("photo");
//         let new_img = document.createElement("img");
//         new_img.src = src;
//         new_photo_div.append(new_img);
//         let new_p = document.createElement("p");
//         new_p.innerText = text;
//         new_photo_div.append(new_p);
//         document.querySelector("#lok").prepend(new_photo_div);
//         document.querySelector(".add_new_photo").classList.remove("open");
//         document.querySelector(".photo_src").value="";
//         document.querySelector(".input_text").value="";
//         new_photo_div.addEventListener("click", open_photo, false);
//     }
//
//     else{
//         if(!src){
//             document.querySelector(".photo_src").classList.add("error");
//         }
//
//         // if(!text){
//         //     document.querySelector(".input_text").classList.add("error");
//         // }
//     }
//
// });
//

//
// let photos = document.querySelectorAll(".photo");
// for(let photo of photos){
//     photo.addEventListener("click", open_photo, false);
// }
//
