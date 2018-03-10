<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use App\Coment;

class Contatos extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = Coment::where('aprovado', false)->count();
        // $string = trans_choice('voyager.dimmer.page', $count);

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-chat',
            'title'  => "{$count} mensagens não lidas",
            'text'   => "Você possui {$count} mensagens marcadas como não lidas. Utilize o botão abaixo para visualizar suas mensagens.",
            'button' => [
                'text' => 'Ver todas as mensgens',
                'link' => route('voyager.coments.index'),
            ],
            'image' => '/storage/posts/post3.jpg',
        ]));
    }
}
