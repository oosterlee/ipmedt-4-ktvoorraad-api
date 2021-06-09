import React from "react";
import "./VideoPlayer.css";

const VideoPlayer = props =>{
   console.log(props.video);
    return (

    <section>
        <video key={props.video} controls src={props.video}>
        </video>
    </section>
    );
};


export default VideoPlayer;