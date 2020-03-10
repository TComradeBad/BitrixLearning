{"version":3,"sources":["link.js"],"names":["BX","namespace","trim","Landing","Utils","isPlainObject","isString","textToPlaceholders","create","escapeText","decodeDataValue","Block","Node","Link","options","apply","this","arguments","type","isGrouped","node","addEventListener","onClick","bind","isAllowInlineEdit","setAttribute","Loc","getMessage","prototype","__proto__","constructor","onContentUpdate","blockId","getBlock","id","clearTimeout","contentEditTimeout","setTimeout","History","getInstance","push","Entry","block","selector","command","undo","startValue","redo","getValue","getField","setValue","event","preventDefault","stopPropagation","UI","Button","FontAction","hideAll","ColorAction","Panel","StylePanel","isShown","show","isPrevented","target","data","preventSave","preventHistory","containsImage","field","hrefInput","text","includes","getPlaceholderData","href","then","placeholdersData","innerHTML","replace","RegExp","name","containsHtml","manifest","skipContent","attr","attrs","hasOwnProperty","removeAttribute","onChange","firstElementChild","tagName","value","getAttribute","data-url","preventAdjustValue","html","allowedTypes","Field","LinkURL","TYPE_BLOCK","TYPE_PAGE","Main","params","TYPE_STORE","TYPE_CATALOG","title","content","siteId","site_id","landingId","filter","=TYPE","makeDisplayedHrefValue","removeHrefTypeFromHrefString"],"mappings":"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","file":"link.map.js"}