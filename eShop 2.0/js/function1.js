
    function dw_makeXHRRequest(url, callback, method, postData, dataType) {
        // check browser support for XMLHttpRequest
        if (!window.XMLHttpRequest) {
            return null;
        }

        // create request object
        var req = new XMLHttpRequest();

        // assign defaults to optional arguments
        method = method || 'GET';
        postData = postData || null;
        dataType = dataType || 'text/plain';

        // pass method and url to open method
        req.open(method, url);
        // set Content-Type header
        req.setRequestHeader('Content-Type', dataType);

        // handle readystatechange event
        req.onreadystatechange = function () {
            // check readyState property
            if (req.readyState === 4) { // 4 signifies DONE
                // req.status of 200 means success
                if (req.status === 200) {
                    callback.success(req);
                } else { // handle request failure
                    callback.failure(req);
                }
            }
        }

        req.send(postData); // send request

        return req; // return request object
        function drawOutput(responseText) {
            var container = document.getElementById('output');
            container.innerHTML = responseText;
        }
    }

    function dw_encodeVars(params) {
        var str = '';
        for (var i in params) {
            str += encodeURIComponent(i) + '=' + encodeURIComponent(params[i]) + '&';
        }
        return str.slice(0, -1);
    }