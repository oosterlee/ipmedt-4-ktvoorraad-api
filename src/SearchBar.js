import React from 'react';
import "./SearchBar.css";

class SearchBar extends React.Component{

    state = {searchTerm: ""};

    onSearch = event =>{
        this.setState({searchTerm: event.target.value});
    }

    onCheck = event =>{
        event.preventDefault();
        this.props.onSubmit(this.state.searchTerm);
    }

    render(){
        console.log(this.state.searchTerm)
        return(
            <section>
                <form onSubmit={this.onCheck}>
                    <input 
                    className="searchbar" 
                    type="text"
                    placeholder="Zoek hier op jaartal"
                    onChange={this.onSearch}
                    >
                    </input>
                </form>
            </section>
        );
    }
}

export default SearchBar;