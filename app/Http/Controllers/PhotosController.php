<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;

class PhotosController extends Controller {

    /**
     * Update photos in users timeline.
     *
     * @param $username
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function update($username, Request $request)
    {
        $user = User::findUser($username);

        $this->validate($request, [
            'profile_image' => 'mimes:jpeg,jpg,png,svg|max:4000',
            'cover_image'   => 'mimes:jpeg,jpg,png,svg|max:4000',
        ]);

        $user->update([
            $request->cover_image,
            $request->profile_image
        ]);

        $this->uploadProfileImage($user);

        $this->uploadCoverImage($user);

        return back()->with('status', 'Unijeli ste sliku.');
    }

    /**
     * Uploading profile image.
     *
     * @param $user
     * InterventionImage
     */
    public function uploadProfileImage($user)
    {
        if (Input::hasFile('profile_image')) {
            \File::delete(public_path() . 'images/profile/', $user->image);
        }

        if (Input::file('profile_image')) {
            $image = Input::file('profile_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('images/profile/' . $filename);
            Image::make($image->getRealPath())->fit(180, 180)->save($path);
            $user->profile_image = 'images/profile/' . $filename;
            $user->save();
        }
    }

    /**
     * Uploading cover image.
     *
     * @param $user
     * InterventionImage
     */
    public function uploadCoverImage($user)
    {
        if (Input::hasFile('cover_image')) {
            \File::delete(public_path() . 'images/cover/', $user->image);
        }

        if (Input::file('cover_image')) {
            $image = Input::file('cover_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('images/cover/' . $filename);
            Image::make($image->getRealPath())->fit(1800, 500)->save($path);
            $user->cover_image = 'images/cover/' . $filename;
            $user->save();
        }
    }
}
