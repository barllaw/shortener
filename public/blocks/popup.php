<div class="popup">

    <div class="popup_wrap mainlink_popup_wrap ">
        <form action="/link/saveLink/mainlink" method='post'>
            <div class="close" >Close</div>
            <h3>Add mainlink</h3>
            <label for="link_name">Link</label>
            <input type="text" name="link_save" class="link_save">
            <label for="link_name">Name for link</label>
            <input type="text" name="link_name" class="link_name" onkeyup="checkInput('link_name')" require>
            <button class="btn" type="submit">Save</button>
        </form>
    </div>

    <div class="popup_wrap stairs_popup_wrap">
        <form action="/link/saveLink/stairs_link" method='post'>
            <div class="close" >Close</div>
            <h3>Add stairs link</h3>
            <label for="link_name">Link</label>
            <input type="text" name="link_save" class="link_save">
            <button class="btn" type="submit">Save</button>
        </form>
    </div>

    <div class="popup_wrap edit_link_popup_wrap">
        <form action="/link/update/edit_link" method='post'>
            <div class="close" >Close</div>
            <div class="delete_btn" onclick="deleteShortlink()">Delete</div>
            <h3>Edit link</h3>
            <input type="hidden" name='edit_link_id' id="edit_link_id" value="">
            <input type="hidden" name='edit_link_date' id="edit_link_date" value="">
            <span>Link:</span>
            <textarea name='link-for_edit' id="link-for_edit" wrap="hard" onkeyup="textAreaAdjust(this)"></textarea>
            <span>Shortlink:</span>
            <p id="shortlink-for_edit"></p>
            <span>Tiktok:</span>
            <p id="tiktok-for_edit"></p>
            <div class="edit_btns">
                <button type="submit">Save</button>
            </div>
        </form>
    </div>

    <div class="popup_wrap delete_link_popup_wrap">
        <form action="" method=''>
            <div class="close" >Close</div>
            <h3>Delete link?</h3>
            <span>Link:</span>
            <p id="link-for_delete"></p>
            <span>Shortlink:</span>
            <p id="shortlink-for_delete"></p>
            <span>Tiktok:</span>
            <p id="tiktok-for_delete"></p>
            <a href="" id="delete_shortlink_btn">Delete</a>
        </form>
    </div>

    <div class="popup_wrap delete_user_popup_wrap">
        <form action="" method=''>
            <div class="close" >Close</div>
            <h3>Delete user </h3>
            <a href="" id="delete_user_btn">Delete</a>
        </form>
    </div>

</div>