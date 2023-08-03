<?php

declare(strict_types=1);

namespace Jascha030\LiveTheme\Console\Command;

use Jascha030\LiveTheme\Model\LiveTheme;
use SplFileInfo;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Serializer;
use function file_get_contents;

class Update extends Command
{
    public function __construct(private readonly Serializer $serializer)
    {
        parent::__construct();
    }

    protected function configure(): void
    {
        $this->setName('update')
            ->setDescription('Update a Live 10 theme to Live 11 format.')
            ->addArgument('path', InputArgument::REQUIRED, 'Path to the theme file to update.')
            ->addArgument('path', InputArgument::REQUIRED, 'Path to output file.');
    }

    public function execute(InputInterface $input, OutputInterface $output): int
    {
        $path = $input->getArgument('path');
        $file = new SplFileInfo($path);

        $contents = file_get_contents($file->getRealPath());

        $theme = $this->serializer->deserialize(
            $contents,
            LiveTheme::class,
            XmlEncoder::FORMAT
        );

        $skinManager = $theme->getSkinManager();

        $new = new LiveTheme();
        $new->setTheme($skinManager?->forceHex());

        return Command::SUCCESS;
    }
}
