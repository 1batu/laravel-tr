<?php

namespace Herkod\Tests;

use PHPUnit\Framework\TestCase;

class LanguageFilesTest extends TestCase
{
    protected $languageFiles = [
        'app.php',
        'auth.php',
        'validation.php',
        'pagination.php',
        'passwords.php',
        'notifications.php',
        'fortify.php',
        'jetstream.php',
        'sanctum.php',
    ];

    protected $languagePath;

    protected function setUp(): void
    {
        parent::setUp();
        $this->languagePath = __DIR__ . '/../resources/lang/tr/';
    }

    public function testLanguageFilesExist()
    {
        foreach ($this->languageFiles as $file) {
            $filePath = $this->languagePath . $file;
            $this->assertFileExists($filePath, "Language file {$file} does not exist");
        }
    }

    public function testLanguageFilesAreValidPhp()
    {
        foreach ($this->languageFiles as $file) {
            $filePath = $this->languagePath . $file;
            
            if (file_exists($filePath)) {
                $content = file_get_contents($filePath);
                
                // Check if file starts with <?php
                $this->assertStringStartsWith('<?php', $content, "Language file {$file} does not start with <?php");
                
                // Check if file returns an array
                $this->assertStringContains('return [', $content, "Language file {$file} does not return an array");
            }
        }
    }

    public function testLanguageFilesHaveValidStructure()
    {
        foreach ($this->languageFiles as $file) {
            $filePath = $this->languagePath . $file;
            
            if (file_exists($filePath)) {
                $content = file_get_contents($filePath);
                
                // Check for proper array structure
                $this->assertStringContains('return [', $content, "Language file {$file} does not have proper array structure");
                $this->assertStringEndsWith('];', trim($content), "Language file {$file} does not end with ];");
            }
        }
    }

    public function testLanguageFilesHaveComments()
    {
        foreach ($this->languageFiles as $file) {
            $filePath = $this->languagePath . $file;
            
            if (file_exists($filePath)) {
                $content = file_get_contents($filePath);
                
                // Check for comment blocks
                $this->assertStringContains('/*', $content, "Language file {$file} should have comment blocks");
                $this->assertStringContains('*/', $content, "Language file {$file} should have comment blocks");
            }
        }
    }
}
