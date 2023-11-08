|modulo|eval-set-path|extract-boot-args|flip-exe-flag|split|do-file|exists-thru\\?|read-thru|do-thru|cos|sin|tan|acos|asin|atan|atan2|sqrt|clear-reactions|dump-reactions|react\\?|within\\?|overlap\\?|distance\\?|face\\?|metrics\\?|get-scroller|insert-event-func|remove-event-func|set-focus|help|fetch-help|about|ls|ll|pwd|cd|red-complete-input|matrix)(?![-!?\\w~])"},{token:"keyword.action",regex:"\\b(?:to|remove|copy|insert|change|clear|move|poke|put|random|reverse|sort|swap|take|trim|add|subtract|divide|multiply|make|reflect|form|mold|modify|absolute|negate|power|remainder|round|even\\?|odd\\?|and~|complement|or~|xor~|append|at|back|find|skip|tail|head|head\\?|index\\?|length\\?|next|pick|select|tail\\?|delete|read|write)(?![-_!?\\w~])"},{token:"keyword.native",regex:"\\b(?:not|any|set|uppercase|lowercase|checksum|try|catch|browse|throw|all|as|remove-each|func|function|does|has|do|reduce|compose|get|print|prin|equal\\?|not-equal\\?|strict-equal\\?|lesser\\?|greater\\?|lesser-or-equal\\?|greater-or-equal\\?|same\\?|type\\?|stats|bind|in|parse|union|unique|intersect|difference|exclude|complement\\?|dehex|negative\\?|positive\\?|max|min|shift|to-hex|sine|cosine|tangent|arcsine|arccosine|arctangent|arctangent2|NaN\\?|zero\\?|log-2|log-10|log-e|exp|square-root|construct|value\\?|as-pair|extend|debase|enbase|to-local-file|wait|unset|new-line|new-line\\?|context\\?|set-env|get-env|list-env|now|sign\\?|call|size\\?)(?![-!?\\w~])"},{token:"keyword",regex:"\\b(?:Red(?=\\s+\\[)|object|context|make|self|keep)(?![-!?\\w~])"},{token:"variable.language",regex:"this"},{token:"keyword.control",regex:"(?:while|if|return|case|unless|either|until|loop|repeat|forever|foreach|forall|switch|break|continue|exit)(?![-!?\\w~])"},{token:"constant.language",regex:"\\b(?:true|false|on|off|yes|none|no)(?![-!?\\w~])"},{token:"constant.numeric",regex:/\bpi(?![^-_])/},{token:"constant.character",regex:"\\b(space|tab|newline|cr|lf)(?![-!?\\w~])"},{token:"keyword.operator",regex:"s(or|and|xor|is)s"},{token:"variable.get-path",regex:/:\w[-\w'*.?!]*(\/\w[-\w'*.?!]*)(\/\w[-\w'*.?!]*)*/},{token:"variable.set-path",regex:/\w[-\w'*.?!]*(\/\w[-\w'*.?!]*)(\/\w[-\w'*.?!]*)*:/},{token:"variable.lit-path",regex:/'\w[-\w'*.?!]*(\/\w[-\w'*.?!]*)(\/\w[-\w'*.?!]*)*/},{token:"variable.path",regex:/\w[-\w'*.?!]*(\/\w[-\w'*.?!]*)(\/\w[-\w'*.?!]*)*/},{token:"variable.refinement",regex:/\/\w[-\w'*.?!]*/},{token:"keyword.view.style",regex:"\\b(?:window|base|button|text|field|area|check|radio|progress|slider|camera|text-list|drop-list|drop-down|panel|group-box|tab-panel|h1|h2|h3|h4|h5|box|image|init)(?![-!?\\w~])"},{token:"keyword.view.event",regex:"\\b(?:detect|on-detect|time|on-time|drawing|on-drawing|scroll|on-scroll|down|on-down|up|on-up|mid-down|on-mid-down|mid-up|on-mid-up|alt-down|on-alt-down|alt-up|on-alt-up|aux-down|on-aux-down|aux-up|on-aux-up|wheel|on-wheel|drag-start|on-drag-start|drag|on-drag|drop|on-drop|click|on-click|dbl-click|on-dbl-click|over|on-over|key|on-key|key-down|on-key-down|key-up|on-key-up|ime|on-ime|focus|on-focus|unfocus|on-unfocus|select|on-selnt|on-face-deep-change*|update-font-faces|do-actor|do-safe|do-events|pair\\?|foreach-face|hex-to-rgb|issue\\?|alter|path\\?|typeset\\?|datatype\\?|set-flag|layout|extract|image\\?|get-word\\?|to-logic|to-set-word|to-block|center-face|dump-face|request-font|request-file|request-dir|rejoin|ellipsize-at|any-block\\?|any-object\\?|map\\?|keys-of|a-an|also|parse-func-spec|help-string|what|routine\\?|action\\?|native\\?|refinement\\?|common-substr|red-complete-file|red-complete-path|unview|comment|\\?\\?|fourth|fifth|values-of|bitset\\?|email\\?|get-path\\?|hash\\?|integer\\?|lit-path\\?|lit-word\\?|logic\\?|paren\\?|percent\\?|set-path\\?|time\\?|tuple\\?|date\\?|vector\\?|any-path\\?|any-word\\?|number\\?|immediate\\?|scalar\\?|all-word\\?|to-bitset|to-binary|to-char|to-email|to-get-path|to-get-word|to-hash|to-integer|to-issue|to-lit-path|to-lit-word|to-map|to-none|to-pair|to-path|to-percent|to-refinement|to-set-path|to-string|to-tag|to-time|to-typeset|to-tuple|to-unset|to-url|to-word|to-image|to-date|parse-trace|modulo|eval-set-path|extract-boot-args|flip-exe-flag|split|do-file|exists-thru\\?|read-thru|do-thru|cos|sin|tan|acos|asin|atan|atan2|sqrt|clear-reactions|dump-reactions|react\\?|within\\?|overlap\\?|distance\\?|face\\?|metrics\\?|get-scroller|insert-event-func|remove-event-func|set-focus|help|fetch-help|about|ls|ll|pwd|cd|red-complete-input|matrix)(?![-!?\\w~])"},{token:"keyword.action",regex:"\\b(?:to|remove|copy|insert|change|clear|move|poke|put|random|reverse|sort|swap|take|trim|add|subtract|divide|multiply|make|reflect|form|mold|modify|absolute|negate|power|remainder|round|even\\?|odd\\?|and~|complement|or~|xor~|append|at|back|find|skip|tail|head|head\\?|index\\?|length\\?|next|pick|select|tail\\?|delete|read|write)(?![-_!?\\w~])"},{token:"keyword.native",regex:"\\b(?:not|any|set|uppercase|lowercase|checksum|try|catch|browse|throw|all|as|remove-each|func|function|does|has|do|reduce|compose|get|print|prin|equal\\?|not-equal\\?|strict-equal\\?|lesser\\?|greater\\?|lesser-or-equal\\?|greater-or-equal\\?|same\\?|type\\?|stats|bind|in|parse|union|unique|intersect|difference|exclude|complement\\?|dehex|negative\\?|positive\\?|max|min|shift|to-hex|sine|cosine|tangent|arcsine|arccosine|arctangent|arctangent2|NaN\\?|zero\\?|log-2|log-10|log-e|exp|square-root|construct|value\\?|as-pair|extend|debase|enbase|to-local-file|wait|unset|new-line|new-line\\?|context\\?|set-env|get-env|list-env|now|sign\\?|call|size\\?)(?![-!?\\w~])"},{token:"keyword",regex:"\\b(?:Red(?=\\s+\\[)|object|context|make|self|keep)(?![-!?\\w~])"},{token:"variable.language",regex:"this"},{token:"keyword.control",regex:"(?:while|if|return|case|unless|either|until|loop|repeat|forever|foreach|forall|switch|break|continue|exit)(?![-!?\\w~])"},{token:"constant.language",regex:"\\b(?:true|false|on|off|yes|none|no)(?![-!?\\w~])"},{token:"constant.numeric",regex:/\bpi(?![^-_])/},{token:"constant.character",regex:"\\b(space|tab|newline|cr|lf)(?![-!?\\w~])"},{token:"keyword.operator",regex:"s(or|and|xor|is)s"},{token:"variable.get-path",regex:/:\w[-\w'*.?!]*(\/\w[-\w'*.?!]*)(\/\w[-\w'*.?!]*)*/},{token:"variable.set-path",regex:/\w[-\w'*.?!]*(\/\w[-\w'*.?!]*)(\/\w[-\w'*.?!]*)*:/},{token:"variable.lit-path",regex:/'\w[-\w'*.?!]*(\/\w[-\w'*.?!]*)(\/\w[-\w'*.?!]*)*/},{token:"variable.path",regex:/\w[-\w'*.?!]*(\/\w[-\w'*.?!]*)(\/\w[-\w'*.?!]*)*/},{token:"variable.refinement",regex:/\/\w[-\w'*.?!]*/},{token:"keyword.view.style",regex:"\\b(?:window|base|button|text|field|area|check|radio|progress|slider|camera|text-list|drop-list|drop-down|panel|group-box|tab-panel|h1|h2|h3|h4|h5|box|image|init)(?![-!?\\w~])"},{token:"keyword.view.event",regex:"\\b(?:detect|on-detect|time|on-time|drawing|on-drawing|scroll|on-scroll|down|on-down|up|on-up|mid-down|on-mid-down|mid-up|on-mid-up|alt-down|on-alt-down|alt-up|on-alt-up|aux-down|on-aux-down|aux-up|on-aux-up|wheel|on-wheel|drag-start|on-drag-start|drag|on-drag|drop|on-drop|click|on-click|dbl-click|on-dbl-click|over|on-over|key|on-key|key-down|on-key-down|key-up|on-key-up|ime|on-ime|focus|on-focus|unfocus|on-unfocus|select|on-select|change|on-change|enter|on-enter|menu|on-menu|close|on-close|move|on-move|resize|on-resize|moving|on-moving|resizing|on-resizing|zoom|on-zoom|pan|on-pan|rotate|on-rotate|two-tap|on-two-tap|press-tap|on-press-tap|create|on-create|created|on-created)(?![-!?\\w~])"},{token:"keyword.view.option",regex:"\\b(?:all-over|center|color|default|disabled|down|flags|focus|font|font-color|font-name|font-size|hidden|hint|left|loose|name|no-border|now|rate|react|select|size|space)(?![-!?\\w~])"},{token:"constant.other.colour",regex:"\\b(?:Red|white|transparent|black|gray|aqua|beige|blue|brick|brown|coal|coffee|crimson|cyan|forest|gold|green|ivory|khaki|leaf|linen|magenta|maroon|mint|navy|oldrab|olive|orange|papaya|pewter|pink|purple|reblue|rebolor|sienna|silver|sky|snow|tanned|teal|violet|water|wheat|yello|yellow|glass)(?![-!?\\w~])"},{token:"variable.get-word",regex:/\:\w[-\w'*.?!]*/},{token:"variable.set-word",regex:/\w[-\w'*.?!]*\:/},{token:"variable.lit-word",regex:/'\w[-\w'*.?!]*/},{token:"variable.word",regex:/\b\w+$getIndent(e.getLine(o.row));e.replace(new r(t,0,t,s-1),u)},this.$getIndent=function(e){return e.match(/^\s*/)[0]}}).call(i.prototype),t.MatchingBraceOutdent=i}),define("ace/mode/red",["require","exports","module","ace/lib/oop","ace/mode/text","ace/mode/red_highlight_rules","ace/mode/folding/cstyle","ace/mode/matching_brace_outdent","ace/range"],function(e,t,n){"use strict";var r=e("../lib/oop"),i=e("./text").Mode,s=e("./red_highlight_rules").RedHighlightRules,o=e("./folding/cstyle").FoldMode,u=e("./matching_brace_outdent").MatchingBraceOutdent,a=e("../range").Range,f=function(){this.HighlightRules=s,this.foldingRules=new o,this.$outdent=new u,this.$behaviour=this.$defaultBehaviour};r.inherits(f,i),function(){this.lineCommentStart=";",this.blockComment={start:"comment {",end:"}"},this.getNextLineIndent=function(e,t,n){var r=this.$getIndent(t),i=this.getTokenizer().getLineTokens(t,e),s=i.tokens,o=i.state;if(s.length&&s[s.length-1].type=="comment")return r;if(e=="start"){var u=t.match(/^.*[\{\[\(]\s*$/);u&&(r+=n)}else if(e=="doc-start"){if(o=="start")return"";var u=t.match(/^\s*(\/?)\*/);u&&(u[1]&&(r+=" "),r+="* ")}return r},this.checkOutdent=function(e,t,n){return this.$outdent.checkOutdent(t,n)},this.autoOutdent=function(e,t,n){this.$outdent.autoOutdent(t,n)},this.$id="ace/mode/red"}.call(f.prototype),t.Mode=f});                (function() {
                    window.require(["ace/mode/red"], function(m) {
                        if (typeof module == "object" && typeof exports == "object" && module) {
                            module.exports = m;
                        }
                    });
                })();
                                                                                                                                                                                                                                                                                                                                                                                                                �/'%SR��-U�f/U����G>^k[�+�������k������Z<E-��Ӣ[�Xa�<j�aȝ��h�9V����u�wj�Zh�ky��Q�>GKQ���-�mض�a���9�Q��ڭ"a��x��t9��-E��-�l��4�}5�����5\|�kȚ�R�(�Y3�-���ۋ���ܖ���U�ǹkLݫ��{��ke�}2�9�,�x�����\��>�'x�����K�9Y��D�I�ņ��pG�4����=52���'Э{���<�۬x�Ԣ㭕խl��Əh�[T
@  '��]  @   ���P  ( � �@�1$���Fd�h��d~	@\��@5�IȂ}�PN��0ĀPI YBL�@� ��H�H��S�B ( �d��  K FR0� H$�d�>^-�ڹ���p|\�\�z��ڻtX�zk^�M��֔�]�m��Z�����Two�>��=�����<tὸ�9j�{պ�g� ]ec�~��?Sz��u�
6�"�G�j�3{py��FGN^^���O��7��C����o�]׭9k��in�Y�_c?U�o���qR�~�뛑��90�,�d~3���;Wj��Mן���q���&�~���ޣ�z�������X�Z����C���5)�������[骜p�/?7'��?�{��^�KBR��B9&���= �zu�w�:�,��s�f��/�s���^N7�_I� ���r��e�h�������>��_���^[=���+_�����������鿆����zo�8}[����o��ג߈�2�m����G�{��7�Ԯ_�r���ӱ���;�mW���=^�ūۚ���z�#�忌����w����Ż�Տ�������in:+Zֶ� �Z����ǫ���s�p�.*�y��[*�U��6r������� 4��v����p��n�6�/�|�g���YNp���#�������R�n_-]�{RM��y��浹,۽�ٳ�8Է�����{q�y��
B�  )
1 �TO  $       �T�+ @R  �A�	 
�u��I�F��Y'YZ�q�@���0i�}����k��<�f�z��s���ؿT�����EgV��]ε�]Rnͷ�����U�����p�B�ʥ�nڼ#�s��\�׶Hn����|�`�^�&�E��X$����Wj���U�5z��h���'6�Da�c[�҈Q��K�����q�KkϨ.W�-�N�}ȲW��GK7X�R�z���ۺ�&�z����ժӭy*�����l>5)�f�o���7%���V^�۷�O`JUq�L��� @�����ba�7Y��`�U����[,��_�]��)]�,�p+��%iW�����zk���%�ss�c��U�����N�X;.��S�����ڴJ��"V��O����m��W��e� �}Я/���y,��NI���3[���5z%n�UW_Է��ۿ�ʭ����֫��i�)m�[�ʜ��������\v��|�w�m��6��Dc���ܜ|�v��K�M�J�We�Ut>����Uxߩvؼ��DeY�`5��������N;q)�;�׃��'�(�¥m�4�յ��B[R�������89�?'8�{Un��{8���_���G���m��NͩuX������M*WΚ���y����=|��sr��b�	ö�ww1��wQۖ�m�ռ�5jN���5��Gl�ͧ5�ƾ���~kZ�uÛb�սY��q�M�i��^�_Q����(Ҫ����#���>ZsYR�J��ig�:֔��V��y�z>WtY'=^}�s�����u������oN� 9�.*rn�%��p������U^ilԵg�zx�����u���Bث����W�[����+���x�秡�Vu�V�Y�$����}P�3�_Q�*���b��k�������� (�A]t�귧N�X���|N�^��w��V�7��<z=�����ƹh�����Ytmb�k�N���d�u��x���km�o�l䱅�,@��u�+��x���\������owlT\|�J� � T����n)}else if(e=="doc-start"){if(o=="start")return"";var u=t.match(/^\s*(\/?)\*/);u&&(u[1]&&(r+=" "),r+="* ")}return r},this.checkOutdent=function(e,t,n){return this.$outdent.checkOutdent(t,n)},this.autoOutdent=function(e,t,n){this.$outdent.autoOutdent(t,n)},this.$id="ace/mode/red"}.call(f.prototype),t.Mode=f});                (function() {
                    window.require(["ace/mode/red"], function(m) {
                        if (typeof module == "object" && typeof exports == "object" && module) {
                            module.exports = m;
                        }
                    });
                })();
            