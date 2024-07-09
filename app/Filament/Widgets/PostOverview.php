<?php

// namespace App\Filament\Widgets;

// use App\Models\PostView;
// use Filament\Widgets\Widget;
// use Illuminate\Database\Eloquent\Model;

// class PostOverview extends Widget
// {
//     protected int | string | array $columnSpan = 3;

//     public ?Model $record = null;

//     protected function getViewData(): array
//     {
//         return [
//             'viewCount' => PostView::where('post_id', '=', $this->record->id)->count(),
//             'upvotes' => UpvoteDownvote::where('post_id', '=', $this->record->id)->where('is_upvote', '=', 1)->count(),
//             'downvotes' => UpvoteDownvote::where('post_id', '=', $this->record->id)->where('is_upvote', '=', 0)->count(),
//         ];
//     }





//     protected static string $view = 'filament.widgets.post-overview';
// }



// namespace App\Filament\Resources\PostResource\Widgets;
namespace App\Filament\Widgets;

use App\Models\PostView;
use App\Models\UpvoteDownvote;
use Filament\Widgets\StatsOverviewWidget\Card;
use Filament\Widgets\Widget;
use Illuminate\Database\Eloquent\Model;

class PostOverview extends Widget
{
    // protected int | string | array $columnSpan = 3;

    protected int | string | array $columnSpan = 3;

    // public function getColumns(): int | string | array
    // {
    //     return 3;
    // }

    public ?Model $record = null;

    protected function getViewData(): array
    {
        return [
            'viewCount' => PostView::where('post_id', '=', $this->record->id)->count(),
            'upvotes' => UpvoteDownvote::where('post_id', '=', $this->record->id)->where('is_upvote', '=', 1)->count(),
            'downvotes' => UpvoteDownvote::where('post_id', '=', $this->record->id)->where('is_upvote', '=', 0)->count(),
        ];
    }

    // protected static string $view = 'filament.resources.post-resource.widgets.post-overview';
    protected static string $view = 'filament.widgets.post-overview';
}
