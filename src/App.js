
import React from "react";
import SearchBar from "./SearchBar";
import axios from "axios";
import VideoPlayer from "./VideoPlayer";

import "./App.css";

class App extends React.Component{
  state = {video: ""}


  componentDidMount(){
    this.makeApiCall(2006);
  }

  makeApiCall= searchTerm => {
    const BASE_URL = "http://localhost:8000/api/videos/";
    axios.get(BASE_URL + searchTerm).then(res =>{
      this.setState({
        video: "http://localhost:8000" + res.data.video
      });
    });
  };

  render(){
    console.log(this.state.video);
    return (<main>
      <SearchBar onSubmit={this.makeApiCall}></SearchBar>
      <VideoPlayer video={this.state.video}/>
    </main>
    );
  }
}
export default App;
