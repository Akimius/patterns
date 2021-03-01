<?php

class HalfWithWords
{
    private const EXCEPTION_LETTER = 'л';
    private const EXCEPTION_WORD   = 'литровка';

    private array $vowels = ['а', 'о', 'у', 'и', 'ы', 'э', 'е', 'ё', 'ю', 'я'];

    private bool $beginningOfSentence;

    /**
     * HalfWithWords constructor.
     * @param bool $beginningOfSentence
     */
    public function __construct(bool $beginningOfSentence = false)
    {
        $this->beginningOfSentence = $beginningOfSentence;
    }

    /**
     * @param string $half
     * @param string $otherWord
     * @return string
     */
    public function spell(string $half, string $otherWord): string
    {
        $this->checkHalfValidity($half);

        $halfWord = $this->beginningOfSentence
            ? mb_convert_case($half, MB_CASE_TITLE, 'UTF-8')
            : mb_convert_case($half, MB_CASE_LOWER, 'UTF-8');

        if (mb_strtolower($otherWord) === self::EXCEPTION_WORD || mb_strtolower($half) === 'полу') {
            return $halfWord . $otherWord;
        }

        $firstLetter = mb_substr($otherWord, 0, 1);

        if (
            $firstLetter === self::EXCEPTION_LETTER
            || $this->wordStartsWithCapitalLetter($otherWord)
            || $this->wordStartsWithVowel($firstLetter)
        ) {
            return $halfWord . '-' . $otherWord;
        }

        return $halfWord . $otherWord;
    }

    /**
     * @param string $half
     */
    private function checkHalfValidity(string $half): void
    {
        if (!in_array(mb_strtolower($half), ['пол', 'полу'])) {
            throw new \RuntimeException('The half-word is not correct');
        }
    }

    /**
     * @param string $firstLetter
     * @return bool
     */
    private function wordStartsWithVowel(string $firstLetter): bool
    {
        return in_array($firstLetter, $this->vowels, true);
    }

    /**
     * @param string $otherWord
     * @return bool
     */
    private function wordStartsWithCapitalLetter(string $otherWord): bool
    {
        return mb_convert_case($otherWord, MB_CASE_TITLE, 'UTF-8') === $otherWord;
    }
}

$spellChecker = new HalfWithWords();

echo $spellChecker->spell('пол', 'арбуза') . PHP_EOL;
echo $spellChecker->spell('пол', 'Москвы') . PHP_EOL;
echo $spellChecker->spell('пол', 'литра') . PHP_EOL;
echo $spellChecker->spell('пол', 'литровка') . PHP_EOL;
echo $spellChecker->spell('полу', 'тон') . PHP_EOL;




