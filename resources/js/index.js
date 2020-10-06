import React from "react";
import ReactDOM from "react-dom";

import POS from "./components/pos";

const rootElement = document.getElementById("poss");
ReactDOM.render(
    <React.StrictMode>
        <POS />
    </React.StrictMode>,
    rootElement
);
