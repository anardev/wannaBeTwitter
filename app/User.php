<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'profile_image',
        'cover_image',
        'description'
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Find the uses at the given username.
     *
     * @param $username
     * @return mixed
     */
    public static function findUser($username)
    {
        return static::where(compact('username'))->firstOrFail();
    }

    /**
     * User has many statuses.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function status()
    {
        return $this->hasMany('App\Status');
    }

    /**
     * Get the list of users that the current user follows.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function follows()
    {
        return $this->belongsToMany('App\User', 'follows', 'follower_id', 'followed_id')->withTimestamps();
    }

    /**
     * Get the list of users who follow the current user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function followers()
    {
        return $this->belongsToMany('App\User', 'follows', 'followed_id', 'follower_id')->withTimestamps();
    }

    /**
     * Determine if current user follows other user.
     *
     * @param User $otherUser
     * @return bool
     */
    public function isFollowedBy(User $otherUser)
    {
        $userFollows = $otherUser->follows()->lists('followed_id')->toArray();

        return in_array($this->id, $userFollows);
    }

}
