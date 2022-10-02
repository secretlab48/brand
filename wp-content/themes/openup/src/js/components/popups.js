import {Popup} from "./modules";

    let popup = new Popup();

    $('.o-modal').on('click', popup.closePopupFromOutside.bind(popup));
    $('.o-modal-close').on('click', popup.closePopup.bind(popup));


