const mnavbar = document.querySelector(".m-navbar");
const roundElement = document.querySelector(".m-navbar-uitklap");

// Laat de mobiele navbar uitklappensss
const openM = (attr) =>  {
    roundElement.setAttribute("onclick", undefined);
    roundElement.classList += ' animate-spin';
    if (attr == "show") {
        mnavbar.classList = "m-navbar flex text-2xl text-center flex-col rounded-2xl lg:hidden justify-around items-center border-3 border-[#FF4800] border-opacity-25 right-1 absolute h-63 w-50 bg-[#A2C9CD] mt-85";
        setTimeout( () => {
            roundElement.setAttribute("onclick", 'openM("hide")');
            roundElement.classList = "cursor-pointer m-navbar-uitklap justify-around flex lg:hidden items-center w-13 h-13 absolute right-4 border-[#B8B8B8] border-3 rounded-[100%]";
        }, 500 )
    }

    else {
        mnavbar.classList = "m-navbar hidden flex text-2xl text-center flex-col rounded-2xl lg:hidden justify-around items-center border-3 border-[#FF4800] border-opacity-25 right-1 absolute h-63 w-50 bg-[#A2C9CD] mt-85";

        setTimeout( () => {
            roundElement.setAttribute("onclick", 'openM("show")');
            roundElement.classList = "cursor-pointer m-navbar-uitklap justify-around flex lg:hidden items-center w-13 h-13 absolute right-4 border-[#B8B8B8] border-3 rounded-[100%]";

            }, 500 )
    }

}