<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'gender', 'email', 'postcode', 'address', 'opinion'];

    public static function doSearch($name, $gender, $email, $from, $until)
    {
        $query = self::query();
        if (!empty($name)) {
            $query->where('name', 'like binary', "%{$name}%");
        }
        if (!empty($gender)) {
            $query->where('gender', 'like binary', "%{$gender}%");
        }
        if (!empty($email)) {
            $query->where('email', 'like binary', "%{$email}%");
        }
        if (!empty($from) && !empty($until)) {
            $query->where('created_at', '>=', Carbon::parse($from)->startOfDay());
            $query->where('created_at', '<=', Carbon::parse($until)->endOfDay());
        }
        $results = $query->orderByDesc('created_at')->paginate(8);
        return $results;
    }

    public static function getDate($from, $until)
    {
        $date = Contact::whereBetween("created_at", [$from, $until])->get();

        return $date;
    }
}
