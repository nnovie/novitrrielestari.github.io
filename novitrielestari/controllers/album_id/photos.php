$image = Image::find(Input::get('photo'));
$image->album_id = Input::get('new_album');
$image->save();
return Redirect::route('show_album',array('id'=>Input::get('new_album')));