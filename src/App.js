
import React from "react";
import SearchBar from "./SearchBar";
import axios from "axios";


import "./App.css";

class App extends React.Component{
  state = {video: ""}
  resultaat = "Nog geen product";


  componentDidMount(){
    this.makeApiCall(1);
  }

  makeApiCall= searchTerm => {
    const BASE_URL = "http://localhost:8000/products/";
    axios.get(BASE_URL + searchTerm).then(res =>{
      console.log(res.data);
      let resultaat = res;
      return resultaat;
    });
    
  };

  render(){
    console.log(this.state.video);
    return (<main>
      <SearchBar onSubmit={this.makeApiCall}></SearchBar>
      {/* TODO */}
      <p>{{ this.resultaat.data }}</p>
      {/* einde todo */}
    </main>
    );
  }
}
export default App;
