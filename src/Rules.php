<?php

declare(strict_types=1);

namespace Suin\PhpCsFixer;

/*
This document has been generated with
https://mlocati.github.io/php-cs-fixer-configurator/?version=2.13#configurator
you can change this configuration by importing this YAML code:

version: 2.13.0
expandSets: false
fixerSets:
  - '@PSR2'
fixers:
  align_multiline_comment: true
  array_indentation: true
  array_syntax:
    syntax: short
  backtick_to_shell_exec: true
  binary_operator_spaces: true
  blank_line_after_opening_tag: true
  blank_line_before_statement:
    statements:
      - declare
      - do
      - for
      - foreach
      - if
      - switch
      - try
  cast_spaces: true
  class_attributes_separation: true
  combine_consecutive_issets: true
  combine_consecutive_unsets: true
  comment_to_phpdoc: true
  compact_nullable_typehint: true
  concat_space:
    spacing: one
  date_time_immutable: true
  declare_equal_normalize: true
  declare_strict_types: true
  dir_constant: true
  ereg_to_preg: true
  error_suppression:
    noise_remaining_usages: true
  escape_implicit_backslashes: true
  explicit_indirect_variable: true
  explicit_string_variable: true
  final_internal_class: true
  fopen_flag_order: true
  fopen_flags: true
  fully_qualified_strict_types: true
  function_to_constant: true
  function_typehint_space: true
  general_phpdoc_annotation_remove:
    annotations:
      - class
      - package
      - author
  hash_to_slash_comment: true
  heredoc_to_nowdoc: true
  include: true
  is_null:
    use_yoda_style: false
  linebreak_after_opening_tag: true
  list_syntax:
    syntax: short
  logical_operators: true
  lowercase_cast: true
  lowercase_static_reference: true
  magic_constant_casing: true
  magic_method_casing: true
  method_chaining_indentation: true
  method_separation: true
  modernize_types_casting: true
  multiline_comment_opening_closing: true
  multiline_whitespace_before_semicolons: true
  native_constant_invocation: true
  native_function_casing: true
  native_function_invocation: true
  new_with_braces: true
  no_alias_functions: true
  no_alternative_syntax: true
  no_blank_lines_after_class_opening: true
  no_blank_lines_after_phpdoc: true
  no_empty_comment: true
  no_empty_phpdoc: true
  no_empty_statement: true
  no_extra_blank_lines: true
  no_extra_consecutive_blank_lines:
    tokens:
      - break
      - continue
      - extra
      - return
      - throw
      - use
      - parenthesis_brace_block
      - square_brace_block
      - curly_brace_block
  no_homoglyph_names: true
  no_leading_import_slash: true
  no_leading_namespace_whitespace: true
  no_mixed_echo_print: true
  no_multiline_whitespace_around_double_arrow: true
  no_multiline_whitespace_before_semicolons: true
  no_null_property_initialization: true
  no_php4_constructor: true
  no_short_bool_cast: true
  no_singleline_whitespace_before_semicolons: true
  no_spaces_around_offset: true
  no_superfluous_elseif: true
  no_superfluous_phpdoc_tags: true
  no_trailing_comma_in_list_call: true
  no_trailing_comma_in_singleline_array: true
  no_unneeded_control_parentheses: true
  no_unneeded_curly_braces: true
  no_unneeded_final_method: true
  no_unreachable_default_argument_value: true
  no_unset_on_property: true
  no_unused_imports: true
  no_useless_else: true
  no_useless_return: true
  no_whitespace_before_comma_in_array: true
  no_whitespace_in_blank_line: true
  non_printable_character:
    use_escape_sequences_in_strings: true
  normalize_index_brace: true
  object_operator_without_whitespace: true
  ordered_class_elements: true
  ordered_imports: true
  php_unit_construct: true
  php_unit_dedicate_assert: true
  php_unit_method_casing:
    case: snake_case
  php_unit_mock: true
  php_unit_namespaced: true
  php_unit_no_expectation_annotation: true
  php_unit_set_up_tear_down_visibility: true
  php_unit_test_case_static_method_calls:
    call_type: self
  phpdoc_add_missing_param_annotation:
    only_untyped: false
  phpdoc_align:
    align: left
  phpdoc_annotation_without_dot: true
  phpdoc_indent: true
  phpdoc_inline_tag: true
  phpdoc_no_access: true
  phpdoc_no_empty_return: true
  phpdoc_no_package: true
  phpdoc_no_useless_inheritdoc: true
  phpdoc_order: true
  phpdoc_return_self_reference: true
  phpdoc_scalar: true
  phpdoc_separation: true
  phpdoc_single_line_var_spacing: true
  phpdoc_to_comment: true
  phpdoc_trim: true
  phpdoc_trim_consecutive_blank_line_separation: true
  phpdoc_types: true
  phpdoc_types_order: true
  phpdoc_var_without_name: true
  pow_to_exponentiation: true
  protected_to_private: true
  psr4: true
  random_api_migration: true
  return_assignment: true
  return_type_declaration: true
  self_accessor: true
  semicolon_after_instruction: true
  set_type_to_cast: true
  short_scalar_cast: true
  simplified_null_return: true
  single_blank_line_before_namespace: true
  single_line_comment_style: true
  single_quote: true
  space_after_semicolon:
    remove_in_empty_for_expressions: true
  standardize_increment: true
  standardize_not_equals: true
  strict_comparison: true
  strict_param: true
  string_line_ending: true
  ternary_operator_spaces: true
  ternary_to_null_coalescing: true
  trailing_comma_in_multiline_array: true
  trim_array_spaces: true
  unary_operator_spaces: true
  visibility_required:
    elements:
      - const
      - property
      - method
  void_return: true
  whitespace_after_comma_in_array: true
  yoda_style:
    equal: false
    identical: false
risky: true

*/

class Rules
{
    private const RULES = [
        '@PSR2' => true,
        'align_multiline_comment' => true,
        'array_indentation' => true,
        'array_syntax' => ['syntax' => 'short'],
        'backtick_to_shell_exec' => true,
        'binary_operator_spaces' => true,
        'blank_line_after_opening_tag' => true,
        'blank_line_before_statement' => [
            'statements' => [
                'declare',
                'do',
                'for',
                'foreach',
                'if',
                'switch',
                'try',
            ],
        ],
        'cast_spaces' => true,
        'class_attributes_separation' => true,
        'combine_consecutive_issets' => true,
        'combine_consecutive_unsets' => true,
        'comment_to_phpdoc' => true,
        'compact_nullable_typehint' => true,
        'concat_space' => ['spacing' => 'one'],
        'date_time_immutable' => true,
        'declare_equal_normalize' => true,
        'declare_strict_types' => true,
        'dir_constant' => true,
        'ereg_to_preg' => true,
        'error_suppression' => ['noise_remaining_usages' => true],
        'escape_implicit_backslashes' => true,
        'explicit_indirect_variable' => true,
        'explicit_string_variable' => true,
        'final_internal_class' => true,
        'fopen_flag_order' => true,
        'fopen_flags' => true,
        'fully_qualified_strict_types' => true,
        'function_to_constant' => true,
        'function_typehint_space' => true,
        'general_phpdoc_annotation_remove' => [
            'annotations' => ['class', 'package', 'author'],
        ],
        'hash_to_slash_comment' => true,
        'heredoc_to_nowdoc' => true,
        'include' => true,
        'is_null' => ['use_yoda_style' => false],
        'linebreak_after_opening_tag' => true,
        'list_syntax' => ['syntax' => 'short'],
        'logical_operators' => true,
        'lowercase_cast' => true,
        'lowercase_static_reference' => true,
        'magic_constant_casing' => true,
        'magic_method_casing' => true,
        'method_chaining_indentation' => true,
        'method_separation' => true,
        'modernize_types_casting' => true,
        'multiline_comment_opening_closing' => true,
        'multiline_whitespace_before_semicolons' => true,
        'native_constant_invocation' => true,
        'native_function_casing' => true,
        'native_function_invocation' => true,
        'new_with_braces' => true,
        'no_alias_functions' => true,
        'no_alternative_syntax' => true,
        'no_blank_lines_after_class_opening' => true,
        'no_blank_lines_after_phpdoc' => true,
        'no_empty_comment' => true,
        'no_empty_phpdoc' => true,
        'no_empty_statement' => true,
        'no_extra_blank_lines' => true,
        'no_extra_consecutive_blank_lines' => [
            'tokens' => [
                'break',
                'continue',
                'extra',
                'return',
                'throw',
                'use',
                'parenthesis_brace_block',
                'square_brace_block',
                'curly_brace_block',
            ],
        ],
        'no_homoglyph_names' => true,
        'no_leading_import_slash' => true,
        'no_leading_namespace_whitespace' => true,
        'no_mixed_echo_print' => true,
        'no_multiline_whitespace_around_double_arrow' => true,
        'no_multiline_whitespace_before_semicolons' => true,
        'no_null_property_initialization' => true,
        'no_php4_constructor' => true,
        'no_short_bool_cast' => true,
        'no_singleline_whitespace_before_semicolons' => true,
        'no_spaces_around_offset' => true,
        'no_superfluous_elseif' => true,
        'no_superfluous_phpdoc_tags' => true,
        'no_trailing_comma_in_list_call' => true,
        'no_trailing_comma_in_singleline_array' => true,
        'no_unneeded_control_parentheses' => true,
        'no_unneeded_curly_braces' => true,
        'no_unneeded_final_method' => true,
        'no_unreachable_default_argument_value' => true,
        'no_unset_on_property' => true,
        'no_unused_imports' => true,
        'no_useless_else' => true,
        'no_useless_return' => true,
        'no_whitespace_before_comma_in_array' => true,
        'no_whitespace_in_blank_line' => true,
        'non_printable_character' => ['use_escape_sequences_in_strings' => true],
        'normalize_index_brace' => true,
        'object_operator_without_whitespace' => true,
        'ordered_class_elements' => true,
        'ordered_imports' => true,
        'php_unit_construct' => true,
        'php_unit_dedicate_assert' => true,
        'php_unit_method_casing' => ['case' => 'snake_case'],
        'php_unit_mock' => true,
        'php_unit_namespaced' => true,
        'php_unit_no_expectation_annotation' => true,
        'php_unit_set_up_tear_down_visibility' => true,
        'php_unit_test_case_static_method_calls' => ['call_type' => 'self'],
        'phpdoc_add_missing_param_annotation' => ['only_untyped' => false],
        'phpdoc_align' => ['align' => 'left'],
        'phpdoc_annotation_without_dot' => true,
        'phpdoc_indent' => true,
        'phpdoc_inline_tag' => true,
        'phpdoc_no_access' => true,
        'phpdoc_no_empty_return' => true,
        'phpdoc_no_package' => true,
        'phpdoc_no_useless_inheritdoc' => true,
        'phpdoc_order' => true,
        'phpdoc_return_self_reference' => true,
        'phpdoc_scalar' => true,
        'phpdoc_separation' => true,
        'phpdoc_single_line_var_spacing' => true,
        'phpdoc_to_comment' => true,
        'phpdoc_trim' => true,
        'phpdoc_trim_consecutive_blank_line_separation' => true,
        'phpdoc_types' => true,
        'phpdoc_types_order' => true,
        'phpdoc_var_without_name' => true,
        'pow_to_exponentiation' => true,
        'protected_to_private' => true,
        'psr4' => true,
        'random_api_migration' => true,
        'return_assignment' => true,
        'return_type_declaration' => true,
        'self_accessor' => true,
        'semicolon_after_instruction' => true,
        'set_type_to_cast' => true,
        'short_scalar_cast' => true,
        'simplified_null_return' => true,
        'single_blank_line_before_namespace' => true,
        'single_line_comment_style' => true,
        'single_quote' => true,
        'space_after_semicolon' => ['remove_in_empty_for_expressions' => true],
        'standardize_increment' => true,
        'standardize_not_equals' => true,
        'strict_comparison' => true,
        'strict_param' => true,
        'string_line_ending' => true,
        'ternary_operator_spaces' => true,
        'ternary_to_null_coalescing' => true,
        'trailing_comma_in_multiline_array' => true,
        'trim_array_spaces' => true,
        'unary_operator_spaces' => true,
        'visibility_required' => [
            'elements' => ['const', 'property', 'method'],
        ],
        'void_return' => true,
        'whitespace_after_comma_in_array' => true,
        'yoda_style' => [
            'equal' => false,
            'identical' => false
        ],
    ];

    public static function create(?array $overwrittenRules = null): array
    {
        return \array_merge(self::RULES, $overwrittenRules ?? []);
    }
}
