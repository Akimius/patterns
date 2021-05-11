<?php

abstract class AbstractTool
{
    /**
     * @param int $playerNumber
     * @return string
     */
    public function announceWinner(int $playerNumber): string
    {
        return 'The winner is player number: ' . $playerNumber;
    }
}

class Rock extends AbstractTool
{
    public string $weakerEntity   = Scissors::class;
    public string $strongerEntity = Paper::class;
}


class Paper extends AbstractTool
{
    public string $weakerEntity   = Rock::class;
    public string $strongerEntity = Scissors::class;
}


class Scissors extends AbstractTool
{
    public string $weakerEntity   = Paper::class;
    public string $strongerEntity = Rock::class;
}

class RockPaperScissor
{
    public function rockPaperScissors(AbstractTool $tool1, AbstractTool $tool2): string
    {
        if ($tool1 instanceof $tool2) {
            return 'Nobody wins';
        }

        if ($tool1->strongerEntity === $tool2->weakerEntity) {
            return $tool1->announceWinner(1);
        }

        if ($tool1->weakerEntity === $tool2->strongerEntity) {
            return $tool2->announceWinner(2);
        }

        throw new RuntimeException('Oops');
    }
}


$rockPaperScissors = new RockPaperScissor();

echo $rockPaperScissors->rockPaperScissors(new Scissors(), new Paper());

