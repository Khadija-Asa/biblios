<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'BabdevPagerfanta'.\DIRECTORY_SEPARATOR.'ExceptionsStrategyConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class BabdevPagerfantaConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $defaultView;
    private $defaultTwigTemplate;
    private $exceptionsStrategy;
    private $_usedProperties = [];
    private $_hasDeprecatedCalls = false;

    /**
     * @default 'default'
     * @param ParamConfigurator|mixed $value
     * @return $this
     * @deprecated since Symfony 7.4
     */
    public function defaultView($value): static
    {
        $this->_hasDeprecatedCalls = true;
        $this->_usedProperties['defaultView'] = true;
        $this->defaultView = $value;

        return $this;
    }

    /**
     * @default '@BabDevPagerfanta/default.html.twig'
     * @param ParamConfigurator|mixed $value
     * @return $this
     * @deprecated since Symfony 7.4
     */
    public function defaultTwigTemplate($value): static
    {
        $this->_hasDeprecatedCalls = true;
        $this->_usedProperties['defaultTwigTemplate'] = true;
        $this->defaultTwigTemplate = $value;

        return $this;
    }

    /**
     * @default {"out_of_range_page":"to_http_not_found","not_valid_current_page":"to_http_not_found"}
     * @deprecated since Symfony 7.4
     */
    public function exceptionsStrategy(array $value = []): \Symfony\Config\BabdevPagerfanta\ExceptionsStrategyConfig
    {
        $this->_hasDeprecatedCalls = true;
        if (null === $this->exceptionsStrategy) {
            $this->_usedProperties['exceptionsStrategy'] = true;
            $this->exceptionsStrategy = new \Symfony\Config\BabdevPagerfanta\ExceptionsStrategyConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "exceptionsStrategy()" has already been initialized. You cannot pass values the second time you call exceptionsStrategy().');
        }

        return $this->exceptionsStrategy;
    }

    public function getExtensionAlias(): string
    {
        return 'babdev_pagerfanta';
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('default_view', $config)) {
            $this->_usedProperties['defaultView'] = true;
            $this->defaultView = $config['default_view'];
            unset($config['default_view']);
        }

        if (array_key_exists('default_twig_template', $config)) {
            $this->_usedProperties['defaultTwigTemplate'] = true;
            $this->defaultTwigTemplate = $config['default_twig_template'];
            unset($config['default_twig_template']);
        }

        if (array_key_exists('exceptions_strategy', $config)) {
            $this->_usedProperties['exceptionsStrategy'] = true;
            $this->exceptionsStrategy = new \Symfony\Config\BabdevPagerfanta\ExceptionsStrategyConfig($config['exceptions_strategy']);
            unset($config['exceptions_strategy']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['defaultView'])) {
            $output['default_view'] = $this->defaultView;
        }
        if (isset($this->_usedProperties['defaultTwigTemplate'])) {
            $output['default_twig_template'] = $this->defaultTwigTemplate;
        }
        if (isset($this->_usedProperties['exceptionsStrategy'])) {
            $output['exceptions_strategy'] = $this->exceptionsStrategy->toArray();
        }
        if ($this->_hasDeprecatedCalls) {
            trigger_deprecation('symfony/config', '7.4', 'Calling any fluent method on "%s" is deprecated; pass the configuration to the constructor instead.', $this::class);
        }

        return $output;
    }

}
