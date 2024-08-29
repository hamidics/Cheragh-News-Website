var tdwSearch={};
(function(){tdwSearch={items:[],init:function(){tdwSearch.items=[]},item:function(){this.jqueryObj=this.blockAtts=this.blockUid=void 0;this._is_search_open=!1;this._is_live_search_active=!0;this._last_request_results_count=this._current_selection_index=0;this._first_down_up=!0;this._searchFormVersion=this._resultsLimit=void 0;this._openSearchFormClassRegular=this._openSearchFormClassDropdown="";this._is_initialized=this.isSearchFormFull=this.inComposer=!1},_initialize_item:function(a){if(!0!==a._is_initialized){jQuery(document).on("click",
function(b){!0===a._is_search_open&&(a.jqueryObj.find("*").find(b.target).length||tdwSearch.hide_search_box(a))});if(""===a._searchFormVersion)a.jqueryObj.find(".tdw-search-btn").on("click",function(b){b.preventDefault();b.stopPropagation();!0===a._is_search_open?tdwSearch.hide_search_box(a):tdwSearch.show_dropdown_search_box(a)});if("regular"===a._searchFormVersion)a.jqueryObj.find(".tdw-search-form-input").on("click",function(b){b.preventDefault();b.stopPropagation();""!==jQuery(this).val()&&tdwSearch.show_regular_search_box(a)});
a._is_live_search_active&&!a.inComposer&&a.jqueryObj.find(".tdw-search-form-input").keydown(function(b){if(b.which&&39===b.which||b.keyCode&&39===b.keyCode||b.which&&37===b.which||b.keyCode&&37===b.keyCode)tdwSearch.set_input_focus(a);else{if(b.which&&13===b.which||b.keyCode&&13===b.keyCode)return b=a.jqueryObj.find(".tdw-aj-cur-element"),0<b.length?window.location=b.find(".entry-title a").attr("href"):jQuery(this).parent().parent().submit(),!1;if(b.which&&40===b.which||b.keyCode&&40===b.keyCode)return tdwSearch.move_prompt_down(a),
!1;if(b.which&&38===b.which||b.keyCode&&38===b.keyCode)return tdwSearch.move_prompt_up(a),!1;(b.which&&8===b.which||b.keyCode&&8===b.keyCode)&&1===jQuery(this).val().length&&(a.jqueryObj.find(".tdw-aj-search").empty(),"regular"===a._searchFormVersion&&tdwSearch.hide_search_box(a));tdwSearch.set_input_focus(a);setTimeout(function(){tdwSearch.do_ajax_call(a)},100);return!0}});var c=0<jQuery("."+a.blockUid).parents(".td-header-template-wrap").length;window.tdb_p_autoload_vars.isAjax?c||(a.isSearchFormFull?
tdwSearch.searchFormWidth(a,!0,a.inComposer):tdwSearch.searchFormWidth(a,!1,a.inComposer)):a.isSearchFormFull?tdwSearch.searchFormWidth(a,!0,a.inComposer):tdwSearch.searchFormWidth(a,!1,a.inComposer);a._is_initialized=!0}},addItem:function(a){if("undefined"===typeof a.blockUid)throw"item.blockUid is not defined";tdwSearch.items.push(a);tdwSearch._initialize_item(a)},deleteItem:function(a){for(var c=0;c<tdwSearch.items.length;c++)if(tdwSearch.items[c].blockUid===a)return tdwSearch.items.splice(c,1),
!0;return!1},searchFormWidth:function(a,c,b){function e(){k=-f.left+"px";g.attr("style",g.attr("style")+"; left:"+k)}var d=a.jqueryObj,f,h,k,g=d.find(".tdw-drop-down-search");jQuery(window).resize(function(){var a=d.offset().left;c?(g.attr("style","width: "+jQuery("body").outerWidth()+"px !important; left: -"+a+"px;"),setTimeout(function(){f=d.offset();h=f.left;e();b&&setInterval(function(){f=d.offset();f.left!==h&&(e(),h=f.left)},1E3)},500)):g.attr("style","width: "+jQuery("body").outerWidth()+"px !important;")});
a.inComposer&&jQuery(window).resize()},show_dropdown_search_box:function(a){a.jqueryObj.find(".tdw-drop-down-search").addClass(a._openSearchFormClassDropdown);!0!==tdDetect.isIos&&setTimeout(function(){document.querySelector("."+a.blockUid+" .tdw-search-form-input").focus()},200);a._is_search_open=!0},show_regular_search_box:function(a){a.jqueryObj.find(".tdw-aj-search").addClass(a._openSearchFormClassRegular);a._is_search_open=!0},hide_search_box:function(a){""===a._searchFormVersion?a.jqueryObj.find(".tdw-drop-down-search").removeClass(a._openSearchFormClassDropdown):
"regular"===a._searchFormVersion&&a.jqueryObj.find(".tdw-aj-search").removeClass(a._openSearchFormClassRegular);a._is_search_open=!1},move_prompt_up:function(a){!0===a._first_down_up?(a._first_down_up=!1,0===a._current_selection_index?a._current_selection_index=a._last_request_results_count-1:a._current_selection_index--):0===a._current_selection_index?a._current_selection_index=a._last_request_results_count:a._current_selection_index--;tdwSearch._repaintCurrentElement(a)},move_prompt_down:function(a){!0===
a._first_down_up?a._first_down_up=!1:a._current_selection_index===a._last_request_results_count?a._current_selection_index=0:a._current_selection_index++;tdwSearch._repaintCurrentElement(a)},set_input_focus:function(a){a._current_selection_index=0;a._first_down_up=!0;a.jqueryObj.find(".tdw-search-form").fadeTo(100,1);a.jqueryObj.find(".td_module_wrap").removeClass("tdw-aj-cur-element")},remove_input_focus:function(a){0!==a._last_request_results_count&&a.jqueryObj.find(".tdw-search-form-input").addClass("tdw-search-nofocus")},
_repaintCurrentElement:function(a){a.jqueryObj.find(".td_module_wrap").removeClass("tdw-aj-cur-element");a._current_selection_index>a._last_request_results_count-1?(a.jqueryObj.find(".tdw-search-form").fadeTo(100,1),a.jqueryObj.find(".tdw-search-form-input").removeClass("tdw-search-nofocus")):(tdwSearch.remove_input_focus(a),a.jqueryObj.find(".td_module_wrap").eq(a._current_selection_index).addClass("tdw-aj-cur-element"))},do_ajax_call:function(a){var c=a.jqueryObj.find(".tdw-search-form-input").val();
""===c?tdwSearch.set_input_focus(a):tdLocalCache.exist("tdw-"+c)?tdwSearch.process_ajax_response(tdLocalCache.get("tdw-"+c),a):jQuery.ajax({type:"POST",url:td_ajax_url,data:{action:"td_ajax_search",module:"td_woo_product_module",atts:a.blockAtts,td_string:c,limit:a._resultsLimit,post_type:"product"},success:function(b,e,d){tdLocalCache.set("tdw-"+c,b);tdwSearch.process_ajax_response(b,a)},error:function(a,c,d){window.console.log(d)}})},process_ajax_response:function(a,c){var b=c.jqueryObj.find(".tdw-search-form-input").val(),
e=c.jqueryObj.find(".tdw-aj-search");""===b?e.empty():(a=jQuery.parseJSON(a),a.td_search_query===b&&(c._current_selection_index=0,c._last_request_results_count=a.td_total_in_list,c._first_down_up=!0,e.html(a.td_data),"undefined"!==typeof window.tdAnimationStack&&!0===window.tdAnimationStack.activated&&(window.tdAnimationStack.check_for_new_items(".tdw-aj-search .td-animation-stack",window.tdAnimationStack.SORTED_METHOD.sort_left_to_right,!0,!1),window.tdAnimationStack.compute_items(!1)),"regular"===
c._searchFormVersion&&tdwSearch.show_regular_search_box(c)))},hideAllItems:function(){tdwSearch.items.forEach(function(a){tdwSearch.hide_search_box(a)})}}})();jQuery().ready(function(){tdwSearch.init();setTimeout(function(){jQuery(window).resize()},500)});
