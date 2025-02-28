<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'AddToList'.\DIRECTORY_SEPARATOR.'TranslatorConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'AddToList'.\DIRECTORY_SEPARATOR.'MessengerConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class AddToListConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $translator;
    private $messenger;
    
    public function translator(array $value = []): \Symfony\Config\AddToList\TranslatorConfig
    {
        if (null === $this->translator) {
            $this->translator = new \Symfony\Config\AddToList\TranslatorConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "translator()" has already been initialized. You cannot pass values the second time you call translator().');
        }
    
        return $this->translator;
    }
    
    public function messenger(array $value = []): \Symfony\Config\AddToList\MessengerConfig
    {
        if (null === $this->messenger) {
            $this->messenger = new \Symfony\Config\AddToList\MessengerConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "messenger()" has already been initialized. You cannot pass values the second time you call messenger().');
        }
    
        return $this->messenger;
    }
    
    public function getExtensionAlias(): string
    {
        return 'add_to_list';
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['translator'])) {
            $this->translator = new \Symfony\Config\AddToList\TranslatorConfig($value['translator']);
            unset($value['translator']);
        }
    
        if (isset($value['messenger'])) {
            $this->messenger = new \Symfony\Config\AddToList\MessengerConfig($value['messenger']);
            unset($value['messenger']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->translator) {
            $output['translator'] = $this->translator->toArray();
        }
        if (null !== $this->messenger) {
            $output['messenger'] = $this->messenger->toArray();
        }
    
        return $output;
    }

}
