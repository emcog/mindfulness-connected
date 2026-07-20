export function truncate(text: string, length = 90, omission = '…'): string {
	const plain = text.trim().replace(/\s+/g, ' ');
	if (plain.length <= length) return plain;
	return plain.slice(0, length - omission.length).trimEnd() + omission;
}
