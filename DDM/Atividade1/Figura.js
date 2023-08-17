import { StyleSheet, Image } from "react-native";

export default function Figura({FontImg, StyleImg}){
    return(
        <Image source={FontImg} style={almaNegra.marMorto}/>
    )
}

const almaNegra = StyleSheet.create({
    marMorto: {
        width: 300,
        height: 160,
        borderRadius: 10,
    },
});