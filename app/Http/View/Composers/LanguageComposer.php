<?php
/**
 *  app/Http/View/Composers/LanguageComposer.php
 *
 * Date-Time: 07.06.21
 * Time: 13:22
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */

namespace App\Http\View\Composers;


use App\Models\Language;
use Illuminate\View\View;

/**
 * Class LanguageComposer
 * @package App\Http\View\Composers
 */
class LanguageComposer
{
    /**
     * Bind data to the view.
     *
     * @param View $view
     *
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('localizations', $this->languageItems());
    }

    /**
     * @return array
     */
    public function languageItems(): array
    {
        $localizations = Language::where('status', true)->get();
        $languages = [];
        $languages['data'] = [];
        if (count($localizations) > 0) {
            foreach ($localizations as $localization) {
                if ($this->isCurrent($localization->locale)) {
                    $languages['current'] = [
                        'title' => $localization->title,
                        'url' => '',
                        'locale' => $localization->locale
                    ];
                    continue;
                }
                $languages['data'][] = [
                    'title' => $localization->title,
                    'url' => $this->getUrl($localization->locale),
                    'locale' => $localization->locale
                ];
            }
        }
        return $languages;
    }

    /**
     * @param $lang
     *
     * @return string
     */
    protected function getUrl($lang): string
    {

        $host = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
        $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

        $uriSegments[1] = $lang;

        $uriSegments = implode('/', $uriSegments);
        return $host . $uriSegments;
    }


    protected function isCurrent(string $lang): bool
    {
        return explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH))[1] === $lang;
    }
}