// import { useState } from 'react'
// import reactLogo from './assets/react.svg'
// import viteLogo from '/vite.svg'
import './App.css'

import { useState, useEffect } from "react";
import axios from "axios";

function App() {
  const [backendMessage1, setBackendMessage1] = useState("");
  const [backendMessage2, setBackendMessage2] = useState("");

  const getData = async () => {
    await axios
      .get("http://localhost:8000/index.php")
      .then((response) => {
        setBackendMessage1(response.data.message1);
        setBackendMessage2(response.data.message2);
        // console.log(response.data);
      })
      .catch((error) => {
        console.error("Error connecting to backend:", error);
      });
  };
  useEffect(() => {
    // Replace this URL with your backend endpoint
    getData();
  }, []);

  return (
    <div className="min-h-screen bg-gray-100 flex items-center justify-center">
      <div className="bg-white p-8 rounded-lg shadow-lg">
        <h1 className="text-2xl font-bold text-center mb-4">
          Checking Backend Connection
        </h1>
        <p className="text-lg text-center">
          {backendMessage1 ? backendMessage1 : "Loading..."}
        </p>
        <p className="text-lg text-center">
          {backendMessage2 ? backendMessage2 : "Loading..."}
        </p>
      </div>
    </div>
  );
}

export default App;
