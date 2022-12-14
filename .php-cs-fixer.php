<?php

$rules = [
    '@PSR12'                                                => true,
    'array_syntax'                                          => ['syntax' => 'short'],
    'binary_operator_spaces'                                => ['default' => 'single_space', 'operators' => ['=' => 'align_single_space', '=>' => 'align_single_space', '+=' => 'align_single_space', '*=' => 'align_single_space', '/=' => 'align_single_space', '-=' => 'align_single_space']],
    'blank_line_after_namespace'                            => true,
    'blank_line_after_opening_tag'                          => true,
    'blank_line_before_statement'                           => ['statements' => ['return', 'break', 'throw', 'try', 'if']],
    'braces'                                                => ['allow_single_line_closure' => true, 'position_after_functions_and_oop_constructs' => 'same', 'position_after_anonymous_constructs' => 'same', 'position_after_control_structures' => 'same'],
    'cast_spaces'                                           => true,
    'class_attributes_separation'                           => ['elements' => ['method' => 'one']],
    'class_definition'                                      => true,
    'concat_space'                                          => ['spacing' => 'none'],
    'no_unneeded_curly_braces'                              => true,
    'not_operator_with_space'                               => false,
    'combine_consecutive_issets'                            => true,
    'not_operator_with_successor_space'                     => false,
    'declare_equal_normalize'                               => ['space' => 'single'],
    'elseif'                                                => true,
    'compact_nullable_typehint'                             => true,
    'encoding'                                              => true,
    'full_opening_tag'                                      => true,
    'constant_case'                                         => ['case' => 'lower'],
    'fully_qualified_strict_types'                          => true,
    'lambda_not_used_import'                                => true,
    'mb_str_functions'                                      => true,
    'function_declaration'                                  => true,
    'function_typehint_space'                               => true,
    'heredoc_to_nowdoc'                                     => true,
    'global_namespace_import'                               => ['import_classes' => true, 'import_constants' => true],
    'include'                                               => true,
    'increment_style'                                       => ['style' => 'post'],
    'indentation_type'                                      => true,
    'linebreak_after_opening_tag'                           => true,
    'line_ending'                                           => true,
    'lowercase_cast'                                        => true,
    'multiline_comment_opening_closing'                     => true,
    'no_useless_else'                                       => true,
    'new_with_braces'                                       => true,
    'lowercase_keywords'                                    => true,
    'general_phpdoc_annotation_remove'                      => ['annotations' => ['author', 'copyright']],
    'lowercase_static_reference'                            => true,
    'align_multiline_comment'                               => ['comment_type' => 'all_multiline'],
    'magic_method_casing'                                   => true,
    'magic_constant_casing'                                 => true,
    'combine_consecutive_unsets'                            => true,
    'method_argument_space'                                 => true,
    'native_function_casing'                                => true,
    'ternary_to_null_coalescing'                            => true,
    'random_api_migration'                                  => true,
    'list_syntax'                                           => true,
    'no_extra_blank_lines'                                  => ['tokens' => ['throw', 'use', 'use_trait']],
    'no_blank_lines_after_class_opening'                    => false,
    'no_empty_comment'                                      => true,
    'no_closing_tag'                                        => true,
    'explicit_string_variable'                              => true,
    //    'group_import'                                     => TRUE,
    'explicit_indirect_variable'                       => true,
    'no_empty_phpdoc'                                  => true,
    //    'no_short_echo_tag'                                => FALSE,
    'no_empty_statement'                               => true,
    'comment_to_phpdoc'                                => ['ignored_tags' => ['todo']],
    'phpdoc_to_return_type'                            => ['scalar_types' => true],
    'no_superfluous_phpdoc_tags'                       => ['allow_mixed' => false, 'allow_unused_params' => false, 'remove_inheritdoc' => true],
    'no_leading_import_slash'                          => true,
    'no_leading_namespace_whitespace'                  => true,
    'no_mixed_echo_print'                              => ['use' => 'echo'],
    'no_multiline_whitespace_around_double_arrow'      => true,
    'multiline_whitespace_before_semicolons'           => ['strategy' => 'no_multi_line'],
    'no_short_bool_cast'                               => true,
    'no_singleline_whitespace_before_semicolons'       => true,
    'no_spaces_after_function_name'                    => true,
    'no_spaces_around_offset'                          => true,
    'no_unused_imports'                                => true,
    'no_spaces_inside_parenthesis'                     => true,
    'no_trailing_comma_in_list_call'                   => true,
    'no_trailing_comma_in_singleline_array'            => true,
    'no_trailing_whitespace'                           => true,
    'no_trailing_whitespace_in_comment'                => true,
    'no_unneeded_control_parentheses'                  => true,
    'no_unreachable_default_argument_value'            => true,
    'no_useless_return'                                => true,
    'phpdoc_add_missing_param_annotation'              => false,
    'no_whitespace_before_comma_in_array'              => true,
    'phpdoc_separation'                                => true,
    'ternary_to_elvis_operator'                        => true,
    'single_line_throw'                                => true,
    'no_whitespace_in_blank_line'                      => true,
    'normalize_index_brace'                            => true,
    'object_operator_without_whitespace'               => true,
    'ordered_imports'                                  => ['sort_algorithm' => 'length'],
    //    'phpdoc_inline_tag'                                => TRUE,
    'phpdoc_no_access'                                  => true,
    'phpdoc_no_package'                                 => true,
    'phpdoc_no_useless_inheritdoc'                      => true,
    'phpdoc_to_property_type'                           => true,
    'phpdoc_to_comment'                                 => true,
    'phpdoc_scalar'                                     => true,
    'phpdoc_order'                                      => true,
    'phpdoc_single_line_var_spacing'                    => true,
    'phpdoc_to_param_type'                              => true,
    'phpdoc_var_annotation_correct_order'               => true,
    'phpdoc_summary'                                    => true,
    'phpdoc_trim'                                       => true,
    'phpdoc_types'                                      => true,
    'phpdoc_var_without_name'                           => true,
    'self_accessor'                                     => true,
    'short_scalar_cast'                                 => true,
    'array_indentation'                                 => true,
    'use_arrow_functions'                               => true,
    //    'phpdoc_no_empty_return'                            => true,
    'clean_namespace'                                   => true,
    'implode_call'                                      => true,
    'no_alias_functions'                                => true,
    'non_printable_character'                           => true,
    'simplified_null_return'                            => false,
    'phpdoc_trim_consecutive_blank_line_separation'     => true,
    'single_blank_line_at_eof'                          => true,
    'single_blank_line_before_namespace'                => true,
    'method_chaining_indentation'                       => true,
    'heredoc_indentation'                               => true,
    'single_class_element_per_statement'                => true,
    'phpdoc_indent'                                     => true,
    'single_line_after_imports'                         => true,
    'phpdoc_align'                                      => ['align' => 'vertical', 'tags' => ['param', 'property', 'property-read', 'property-write', 'return', 'throws', 'type', 'var', 'method']],
    'single_quote'                                      => true,
    'space_after_semicolon'                             => false,
    'standardize_not_equals'                            => true,
    'switch_case_semicolon_to_colon'                    => true,
    'switch_case_space'                                 => true,
    'ternary_operator_spaces'                           => true,
    'trim_array_spaces'                                 => true,
    'unary_operator_spaces'                             => true,
    'visibility_required'                               => ['elements' => []],
    'whitespace_after_comma_in_array'                   => true,
];

$finder = PhpCsFixer\Finder::create()
    ->exclude('vendor')
    ->notPath('src/Symfony/Component/Translation/Tests/fixtures/resources.php')
    ->in(__DIR__);

$config = new PhpCsFixer\Config();

return $config
    ->setUsingCache(false)
    ->setRiskyAllowed(true)
    ->setRules($rules)
    ->setFinder($finder);
