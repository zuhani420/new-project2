<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    private static $brand, $image, $imageName, $directory, $imageurl;

    private static function getImageUrl($request)
    {
        self::$image       = $request->file('image');
        self::$imageName   = self::$image->getClientOriginalName();
        self::$directory   = 'brand-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageurl    = self::$directory.self::$imageName;
        return self::$imageurl;
    }

    public static function newBrand($request)
    {
        self::$brand              = new Brand();
        self::$brand->name        = $request->name;
        self::$brand->description = $request->description;
        self::$brand->image       = self::getImageUrl($request);
        self::$brand->save();
    }

    public static function updateBrand($request, $id)
    {
        self::$brand = Brand::find($id);
        if ($request->file('image'))
        {
            if (file_exists(self::$brand->image))
            {
                unlink(self::$brand->image);
            }
            self::$imageurl = self::getImageUrl($request);
        }
        else
        {
            self::$imageurl = self::$brand->image;
        }
        self::$brand->name        = $request->name;
        self::$brand->description = $request->description;
        self::$brand->image       = self::$imageurl;
        self::$brand->save();
    }

    public static function deleteBrand($id)
    {
        self::$brand = Brand::find($id);
        if (file_exists(self::$brand->image))
        {
            unlink(self::$brand->image);
        }
        self::$brand->delete();
    }
}
