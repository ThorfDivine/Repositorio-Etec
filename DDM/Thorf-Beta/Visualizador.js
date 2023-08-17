import { StyleSheet, Image } from "react-native";

export default function Visualizador({FontImg, StyleImg}){
    return(
        <Image source={FontImg} style={almaNegra.marMorto}/>
    )
}

const almaNegra = StyleSheet.create({
    marMorto: {
        width: 412,
        height: 150,
    },
});