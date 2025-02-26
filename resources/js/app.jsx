import './bootstrap';
import React, { StrictMode } from "react";
import { createRoot } from "react-dom/client";
import HelloReact from './components/HelloReact';

createRoot(document.getElementById("root")).render(
    <StrictMode>
        <HelloReact />
    </StrictMode>
);
