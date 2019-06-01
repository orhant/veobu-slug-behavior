<?php
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link https://skeeks.com/
 * @copyright (c) 2010 SkeekS
 * @date 08.11.2017
 */
namespace veo\yii2\slug;
use Cocur\Slugify\RuleProvider\DefaultRuleProvider;

/**
 * Class SlugRuleProvider
 * @package skeeks\yii2\slug
 */
class SlugTurkishRuleProvider extends DefaultRuleProvider
{
    /**
     * @see http://translit-online.ru/yandex.html
     */
    CONST RULENAME = 'turkish';

    /**
     * @param string $ruleset
     *
     * @return array
     */
    public function getRules($ruleset)
    {
        if ($ruleset == self::RULENAME) {

            $turkish = parent::getRules('turkish');
            /**
             * @see http://translit-online.ru/yandex.html
             */
            return array_merge($turkish, [
                'Ç' => 'C',
                'Ä' => 'A',
                'Ž' => 'Z',
                'Ň' => 'N',
                'Ö' => 'O',
                'Ş' => 'S',
                'Ü' => 'U',
                'Ý' => 'Y',
                'ç' => 'c',
                'ä' => 'a',
                'ž' => 'z',
                'ň' => 'n',
                'ö' => 'o',
                'ş' => 's',
                'ü' => 'u',
                'ý' => 'y',
                'ạ' => 'a',
                'ả' => 'a',
                'ầ' => 'a',
                'ấ' => 'a',
                'ậ' => 'a',
                'ẩ' => 'a',
                'ẫ' => 'a',
                'ằ' => 'a',
                'ắ' => 'a',
                'ặ' => 'a',
                'ẳ' => 'a',
                'ẵ' => 'a',
                'ẹ' => 'e',
                'ẻ' => 'e',
                'ẽ' => 'e',
                'ề' => 'e',
                'ế' => 'e',
                'ệ' => 'e',
                'ể' => 'e',
                'ễ' => 'e',
                'ị' => 'i',
                'ỉ' => 'i',
                'ọ' => 'o',
                'ỏ' => 'o',
                'ồ' => 'o',
                'ố' => 'o',
                'ộ' => 'o',
                'ổ' => 'o',
                'ỗ' => 'o',
                'ờ' => 'o',
                'ớ' => 'o',
                'ợ' => 'o',
                'ở' => 'o',
                'ỡ' => 'o',
                'ụ' => 'u',
                'ủ' => 'u',
                'ừ' => 'u',
                'ứ' => 'u',
                'ự' => 'u',
                'ử' => 'u',
                'ữ' => 'u',
                'ỳ' => 'y',
                'ỵ' => 'y',
                'ỷ' => 'y',
                'ỹ' => 'y',
                'Ạ' => 'A',
                'Ả' => 'A',
                'Ầ' => 'A',
                'Ấ' => 'A',
                'Ậ' => 'A',
                'Ẩ' => 'A',
                'Ẫ' => 'A',
                'Ằ' => 'A',
                'Ắ' => 'A',
                'Ặ' => 'A',
                'Ẳ' => 'A',
                'Ẵ' => 'A',
                'Ẹ' => 'E',
                'Ẻ' => 'E',
                'Ẽ' => 'E',
                'Ề' => 'E',
                'Ế' => 'E',
                'Ệ' => 'E',
                'Ể' => 'E',
                'Ễ' => 'E',
                'Ị' => 'I',
                'Ỉ' => 'I',
                'Ọ' => 'O',
                'Ỏ' => 'O',
                'Ồ' => 'O',
                'Ố' => 'O',
                'Ộ' => 'O',
                'Ổ' => 'O',
                'Ỗ' => 'O',
                'Ờ' => 'O',
                'Ớ' => 'O',
                'Ợ' => 'O',
                'Ở' => 'O',
                'Ỡ' => 'O',
                'Ụ' => 'U',
                'Ủ' => 'U',
                'Ừ' => 'U',
                'Ứ' => 'U',
                'Ự' => 'U',
                'Ử' => 'U',
                'Ữ' => 'U',
                'Ỳ' => 'Y',
                'Ỵ' => 'Y',
                'Ỷ' => 'Y',
                'Ỹ' => 'Y',
              
            ]);
        }

        return parent::getRules($ruleset);
    }
}