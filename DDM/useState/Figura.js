import { StyleSheet, TextInput } from "react-native";

export default function Figura({funcaoPRoda}){
    return(
        <TextInput style={almaNegra.marMorto} onChangeText={funcaoPRoda}/>
    )
}

const almaNegra = StyleSheet.create({
    marMorto: {
        width: 150,
        height: 25,
        borderRadius: 5 ,
        backgroundColor: "rgb(180,180,180)",
        color:'rgb(24,100,100)',
        borderWidth: 1,
        borderColor: "black"
    },
});