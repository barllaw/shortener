<div class="popup">
    <div class="popup_wrap">
        <form action="/link/saveLink" method='post'>
        <div class="close" id="close" onclick="closePopup()">Close</div>
        <h3>Save link</h3>
            <label for="link_name">Link</label>
            <input type="text" name="link_save" class="link_save">
            <label for="link_name">Name for link</label>
            <input type="text" name="link_name" class="link_name" onkeyup="checkInput('link_name')" require>
            <button class="btn" id="save_link" type="submit">Save</button>
        </form>
    </div>
</div>